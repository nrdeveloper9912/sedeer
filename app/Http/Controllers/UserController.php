<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['juan', 'pedro', 'jose'];
        return view('usersf.index', ['users' => $users]);
       
    }
    public function create()
    {
        return "Crear Usuarios";
    }
    public function show($id)
    {
        return view('usersf.show', compact('id'));
    }
    
}
