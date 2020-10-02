<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('usuarios' , [ 'users' => $users]);
    	//return view(view: 'usuarios', ['users' => $users]);
    }
    /*
    public function index()
    {
        return view('home');
    }*/
}
