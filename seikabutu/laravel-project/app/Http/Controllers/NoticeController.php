<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;

class NoticeController extends Controller
{
        public function index()
    {
      return view('system/notice');
    }
}
