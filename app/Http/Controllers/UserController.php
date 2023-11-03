<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('USER_LIST')->take(10)->get();
        return view('index', ['users' => $users]);
    }
}
