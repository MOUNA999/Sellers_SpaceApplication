<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Vendeur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class VendeuseAdminController extends Controller
{

//----------------------API---------------------------------------------------------------------------------------------------------------------------------
public function getVendeuse(){
    $vendeuse = Vendeur::all();
    return response()->json($vendeuse);
}
public function getOneVendeuse($id)
{
    $vendeuse = Vendeur::find($id);
    if ($vendeuse) {
        return response()->json($vendeuse);
    } else {
        return response()->json(['error' => 'Vendeuse not found'], 404);
    }
}
public function update(Request $request, $id)
{
    $vendeuse = Vendeur::find($id);
    if ($vendeuse) {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $password = $request->input('password');
        $isActive = $request->input('isActive');
        $login = $request->input('login');
        $code = $request->input('code');

        if ($login && $login!= $vendeuse->login) {
            return response()->json(['error' => 'Le champ login ne peut pas etre modifie'], 400);
        }

        if ($code && $code!= $vendeuse->code) {
            return response()->json(['error' => 'Le champ code ne peut pas etre modifie'], 400);
        }

        $vendeuse->nom = $nom? $nom : $vendeuse->nom;
        $vendeuse->prenom = $prenom? $prenom : $vendeuse->prenom;
        $vendeuse->password = $password? bcrypt($password) : $vendeuse->password;
        $vendeuse->isActive = $isActive? $isActive : $vendeuse->isActive;
        $vendeuse->login = $login? $login : $vendeuse->login;
        $vendeuse->code = $code? $code : $vendeuse->code;
        $vendeuse->save();
        return response()->json($vendeuse);
    } else {
        return response()->json(['error' => 'Vendeuse not found'], 404);
    }
}
public function login(Request $request)
{
    $vendeuse = $this->authenticateVendeuse($request);

    if (!$vendeuse) {

        return response()->json(['error' => 'Invalid login or password'], 401);
    }


    return response()->json($vendeuse);
}


public function authenticateVendeuse(Request $request)
{
    $credentials = $request->only(['login', 'password']);

    $vendeuse = Vendeur::where('login', $credentials['login'])->first();

    if (!$vendeuse) {
        return false;
    }


    if (Str::startsWith($vendeuse->password, '$2y$')) {

        if (!Hash::check($credentials['password'], $vendeuse->password)) {
            return false;
        }
    } else {

        if (!Hash::make($credentials['password']) === $vendeuse->password) {
            return false;
        }
    }

    return $vendeuse;
}




//----------------------------------------------------------------------------------------------------------------------------------------------------------
    function index(Request $request){

         $data = DB::table('vendeuse')->get();

         if (is_bool($data)) {
             return view('admin.login.index')->with('message', 'Failed to retrieve data');
         }

         $data = $data->toArray();

        return view('admin.vendeuse.index', compact('data'));
    }


    public function addVendeuse(Request $request) {
        if (!$request->has('nom') ||!$request->has('prenom') ||!$request->has('point_vente_ID') ||!$request->has('cle') ||!$request->has('login')  ||!$request->has('password') ||!$request->has('isActive')) {
            return response()->json(['message' => 'Missing required fields'], 400);
        }

        $vendeuse = new Vendeur;
        $vendeuse->nom = $request->input('nom');
        $vendeuse->prenom = $request->input('prenom');
        $vendeuse->code = Str::random(8);
        $vendeuse->point_vente_ID= $request->input('point_vente_ID');
        $vendeuse->cle = $request->input('cle');
        $vendeuse->login = $request->input('login');
        $vendeuse->password = bcrypt($request->input('password'));
        $vendeuse->isActive = $request->input('isActive');

        $vendeuse->save();

        return redirect()->route('vendeuse')->with('success', 'Vendeuse added successfully');
    }



    public function updateVendeuse(Request $request, Vendeur $vendeuse){
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
        ]);

        $vendeuse->nom = $request->input('nom');
        $vendeuse->prenom = $request->input('prenom');

        if ($request->input('password')) {
            $vendeuse->password = bcrypt($request->input('password'));
        }

        $vendeuse->save();

        return redirect()->route('updateVendeuse', ['id' => $vendeuse->id])->with('success', 'Vendeuse updated successfully');
    }




    public function updateForm($id)
    {
        $vendeuse=Vendeur::find($id);
        if (!$vendeuse) abort(404);

        return view('admin.vendeuse.update', compact("vendeuse"));
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:8|max:100',
            'new_password' => [
                'required',
                'min:8',
                'max:100',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ]
        ], [
            'current_password.required' => 'Le champ est vide',
            'current_password.min' => 'Veuillez choisir un mot de passe contenant au moins 8 caractères.',
            'current_password.max' => 'euillez choisir un mot de passe contenant moins de 100 caractères.',
            'new_password.required' => 'Le champ est vide',
            'new_password.min' => 'Veuillez choisir un mot de passe contenant au moins 8 caractères.',
            'new_password.max' => 'euillez choisir un mot de passe contenant moins de 100 caractères.',
            'new_password.regex' => 'Le nouveau mot de passe doit contenir des majuscules, des minuscules, des chiffres et des caractères spéciaux.'
        ]);

        $id = $request->id;
        $vendeuse = Vendeur::find($id);
        $password = $request->current_password;

        if (Hash::check($password, $vendeuse->password)) {
            $vendeuse->password = $request->new_password;
            $vendeuse->save();
            return redirect()->route('updateVendeuse', ['id' => $vendeuse->id])->with('success', 'Password changed successfully');
        } else {
            return redirect()->route('updateVendeuse', ['id' => $vendeuse->id])->with('error', 'Ancien mot de passe est incorrect');
        }
    }
}