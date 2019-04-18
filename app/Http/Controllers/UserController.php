<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userListTable(){
        return view('admin-panel.pages.user-list');
    }
    public function addUser(){
        return view('admin-panel.pages.add-user');
    }
}
