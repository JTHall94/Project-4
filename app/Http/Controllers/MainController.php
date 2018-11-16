<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exhibits;

class MainController extends Controller
 {
      /**
    * Handle the incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function __invoke(Request $request)
    {
       $exhibits = Exhibits::all()->sortByDesc('updated_at');
       return view('welcome', compact('exhibits'));
    }

 }
