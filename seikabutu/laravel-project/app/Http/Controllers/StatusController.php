<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Status;

class StatusController extends Controller
{
    public function index()
    {
      return view('system/status');
    }
}
