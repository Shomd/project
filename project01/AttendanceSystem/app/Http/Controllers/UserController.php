<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        // DBよりテーブルの値を全て取得
        $users = User::all();
  
        // 取得した値をビュー「book/index」に渡す
        return view('User', compact('users'));
    }
}
