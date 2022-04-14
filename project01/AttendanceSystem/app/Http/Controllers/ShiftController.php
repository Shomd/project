<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shift;

class ShiftController extends Controller
{
    public function index()
    {
      return view('system/shift');
    }
}
