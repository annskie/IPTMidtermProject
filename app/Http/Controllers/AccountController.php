<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index(){
        $accnt = Account::orderBy('acct_name')->get();

        return view('pages.accounts', ['accounts'=>$accnt]);
    }
}