<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
      $a = 5;
      $b = 6;
      $c = $a + $b;
      return view('welcome');
    }
}
