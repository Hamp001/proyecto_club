<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
 public function login(Request $request){
    
    $credentials = $request->only('email', 'password');
    // dd(User::all());
    if (Auth::attempt($credentials)) {
        // Autenticación exitosa
        return "exito";
    }

    // Autenticación fallida
    return "fallo";
 }
}
