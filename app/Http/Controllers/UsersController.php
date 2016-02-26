<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function show() 
    {
    	return view('users.index', ["users" => User::all()]);
    }

    public function get($id) 
    {
    	return view('users.show', ['user' => User::find($id), 'permissions' => Role::all()]);
    }
}
