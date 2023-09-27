<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function auth(Request $request){
        
        $dados = $request-> validate([
            'Nome' => ['required', 'nome'],
            'Email'=> ['required','email'],
            'Password' => ['required', 'password']
        ]);

        if(Auth::attempt($dados)){
            $request->session()->regenerate();
            return redirect()-> intended('dashborad');
        }
        else{
            return redirect()-> beck()-> with('Usuario Inavalido');
        }
    }


}
