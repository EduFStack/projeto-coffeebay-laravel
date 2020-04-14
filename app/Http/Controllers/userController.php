<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
    //
    protected function home()
    {
        if(!auth::check()){
        $title = "Coffee Bay - Home";

        return view('home', [
            'title' => $title,
        ]);
        }else{
            return redirect()->route('produtos');
        }
    }

    protected function login(Request $request)
    {
        $data = $request->only('email','password');
        $user = User::where('email','=',$request['email'])->first();

        if(auth::attempt($data)){

            return redirect()->route('produtos');

        }elseif ($user == null) {

            $message = "O email ".$data['email']." não está cadastrado no CoffeeBay!";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);

        }else{
            
            $message = "Email ou Senha, inválidos!";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);
        }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect()->route('home');

    }

    protected function register(Request $request)
    {
        $message = [
            'required' => 'As senhas digitadas não estão iguais.'
        ];

        $request->validate([
            'password' => 'required',
            're-password' => 'required|same:password',
        ], $message);

        $data = $request->only('name','email','password');

        $user = User::where('email','=',$request['email'])->first();

        if($user == null){


            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $message = "Parabéns ".$data['name']."! Agora você é um Membro Coffeebay, 
            faça seu login e boas compras!";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);
        }else{
            $message = "O email ".$data['email']." já está cadastrado no Coffeebay. Caso tenha esquecido
            a senha, cadastre-a novamente.";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);
        }
    }

    protected function reset(Request $request)
    {
        $message = [
            'required' => 'As senhas digitadas não estão iguais.'
        ];

        $request->validate([
            'password' => 'required',
            're-password' => 'required|same:password',
        ], $message);

        $request->only('email', 'password', 're-password');
        $data = User::where('email','=',$request['email'])->first();
         
        if($data == !null){

            $user = User::find($data['id']);
            $user->password = hash::make($request['password']);
            $user->save();

            $message = "Senha atualizada com sucesso! Faça o login.";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);
            
        }else{

            $message = "Email informado, não está cadastrado no CoffeeBay!";
            $title = "Coffee Bay - Home";

            return view('home', [
                'message' => $message, 'title' => $title
            ]);
        }
    }
    
}
