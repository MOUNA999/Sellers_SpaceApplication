<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerAdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.login.register');
    }
    public function showLoginForm()
    {
        return view('admin.login.login');
    }
    public function index($id)
    {
        $admin = Admin::find($id);
        if (!$admin) {
            abort(404);
        }


        Session::put('admin_nom', $admin->nom);
        Session::put('admin_prenom', $admin->prenom);

        Session::put('admin_image', $admin->image);

        return view('admin.login.index', compact('admin'));
    }


    public function inscription(Request $request)
    {


        $user = Admin::where('login', $request['login'])->first();

        if($user){
            $response['status']=0;
            $response['message'] ='Email Already exist';
            $response['code'] = 409;
             return response()->json($response);

        }
        else {

        $user = Admin::create([
            'nom'     => $request->nom,
            'prenom'  => $request->prenom,
            'login'    => $request->login,
            'password' =>$request->password,
            'image' => $request->image,
        ]);
        $response['status']=1;
        $response['message'] ='User registered successfully';
        $response['code'] = 200;
        return redirect()->route('admin.login')->with('success', 'Login successful');

              }

    }


    public function login(Request $request)
    {
        $fields = $request->validate([
            'login' => 'required|string|email',
            'password' => 'required|string'
        ]);


        $user = Admin::where('login', $fields['login'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            Session::put('admin', $user);
            return redirect()->route('admin.login')->with('success', 'Email or password is incorrect.');
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $responce = [
            'user' => $user,
            'token' => $token,
            'status' => 1
        ];
       // return redirect()->route('update')->with('success', 'Login successful');
       $admin=$user;

       return view('admin.login.index', compact('admin'));

    }
//--------------------------------------------------------------------------------------------------------------------------------------

public function logout(Request $request)
{

    Auth::logout();
    $request->session()->flush();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login');
}





    public function update(Request $request)
    {

        $request->validate([

            'nom' => 'required|string',
            'prenom' => 'required|string',
        ]);
        $id=$request->id;
        $admin = Admin::find($id);

        if (is_null($admin)) {
            return response()->json(['message' => 'Admin not found'], 404);
        }

        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;

        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $admin->image = $imageName;
        }


        $admin->save();


        return redirect()->route('update', ['id' => $admin->id])->with('success', 'Admin updated successfully');
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
        $admin = Admin::find($id);
        $password = $request->current_password;

        if (Hash::check($password, $admin->password)) {
            $admin->password = bcrypt($request->new_password);
            $admin->save();
            return redirect()->route('update', ['id' => $admin->id])->with('success', 'Password changed successfully');
        } else {
            return redirect()->route('update', ['id' => $admin->id])->with('error', 'Ancien mot de passe est incorrect');
        }
    }






    }