<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin(){
        return view('front.login');
    }
    public function showRegister(){
        return view('front.register');
    }
    public function userListTable(){
        return view('admin-panel.pages.user-list');
    }
    public function addUser(){
        return view('admin-panel.pages.add-user');
    }
}
