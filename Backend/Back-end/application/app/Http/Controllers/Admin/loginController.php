<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User ;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTExceptions;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
    function index(){

        return view('admin.login.login');
    }
    public function inscription(Request $request){

        $user = User::where('email', $request['email'])->first();

        if($user){
            $response['status']=0;
            $response['message'] ='Email Already exist';
            $response['code'] = 409;
             return response()->json($response);

        }
        else {
        // Créez un nouveau user avec les données fournies dans la requête
        $user = User::create([
            'name'     => $request->name,
            'num_tel'  => $request->num_tel,
            'email'    => $request->email,
            'password' =>bcrypt($request->password), // Enregistrez le mot de passe crypté
        ]);
        $response['status']=1;
        $response['message'] ='User registered successfully';
        $response['code'] = 200;
        return response()->json($response);

              }

         return response()->json($response);

    }
    public function connexion(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
               ]);
               if (Auth::attempt($credentials))
               {
                // Récupérer l'utilisateur authentifié
                $user = Auth::user();
                $token = JWTAuth::fromUser($user);

                $response['data'] = ['token' => $token];
                $response['status'] = 1;
                $response['code'] = 200;
                $response['message'] = 'Login successfully';
                return response()->json($response);
                }else {

                // Gérer le cas où l'authentification échoue
                $response['status'] = 0;
                $response['data'] = null;
                $response['code'] = 401;
                $response['message'] = 'Email or password is incorrect';
                return response()->json($response);
            }
        }

        public function getUsers(){
            return response()->json(User::all());
        }
        public function loginPOST(Request $request)
        {
            $request->validate([
                'login'=>'required',
                'password'=>'required|string|min:8|confirmed'
            ]);
            $credentials = $request->only('login','password');
            if(Auth::attempt($credentials)){
                return redirect()->intended(route('product'));
            }
            return redirect(route('admin.login'))->with("error","Login details are not valid");

        }
}
