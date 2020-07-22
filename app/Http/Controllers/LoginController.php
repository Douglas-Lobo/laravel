<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function formLogin(){
        return view('login.formLogin');
    }

    public function logar(Request $req){
        $dados = $req->all();
        
        if (Auth::attempt( ['email' => $dados['email'], 'password'=> $dados['password']]) ) {
            return  redirect()->route('index');
        } 

        return  redirect()->back()->withInput()->withErrors(['Dados não conferem!']);

    }

    public function sair(){

        Auth::logout();
        return redirect()->route('index');

    }
}
