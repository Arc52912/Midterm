<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AccountController extends Controller
{
    public function index(){
        $accounts = DB::select('select * from accounts');
        return view('account',['accounts'=>$accounts]);
    }
}