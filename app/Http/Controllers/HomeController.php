<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exhibits;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibits = Exhibits::all()->sortByDesc('updated_at');
        return view('home', compact('exhibits'));
    }
}
