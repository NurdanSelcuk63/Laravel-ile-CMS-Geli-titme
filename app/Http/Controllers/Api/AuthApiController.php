<?php

namespace App\Http\Controllers\Api;

use App\Classes\LoginClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
        $class = new LoginClass();

        return $class->login($request);
    }
}
