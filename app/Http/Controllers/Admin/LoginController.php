<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Hash;

class LoginController extends Controller
{

    public function index()
    {
    	return view('admin.auth.masuk');
    }

    public function proses(Request $request)
    {
    	$request->validate([
    		'email'			=> 'required|email|exists:users',
    	]);
    	$user = null;
    	$request->validate([
    		'password'		=> [
    			'required',
    			function($atribut, $value, $pesan) use ($request, &$user){
    				$user = User::where('email', $request->email)->first();
    				if(!Hash::check($value, $user->password)){
    					$pesan("Password yang anda masukkan salah");
    				}
    			}
    		]
    	]);
    	Auth::login($user);
    	return redirect('/admin');
    }
}
