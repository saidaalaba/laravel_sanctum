<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HttpResponses;
class AuthController extends Controller
{
    use HttpResponses;

    public function login(){
        return 'hello';
    }

    public function register(){
        return response()->json('this is my register method');
    }
}
