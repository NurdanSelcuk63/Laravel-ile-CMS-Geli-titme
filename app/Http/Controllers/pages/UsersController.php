<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('pages.users.index');
    }
}
