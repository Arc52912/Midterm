<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::select('select * from users');
        return view('user',['users'=>$users]);
    }
}
