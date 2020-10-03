<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /*
    public function index()
    {
    	$users = User::all();
    	return view('usuarios' , [ 'users' => $users]);
    	//return view(view: 'usuarios', ['users' => $users]);
    }*/
    /*
    public function index()
    {
        return view('home');
    }*/
    public function index(Request $request){
        
        if($request->ajax()){
            return User::all();
        }else{
            return view('usuarios');
        }
    }
    /*
    public function store(Request $request){
        $user = new User();
        $user = $name
    }*/
}
