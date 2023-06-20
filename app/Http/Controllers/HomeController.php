<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->data = array(
        //     'theme' => 'bs5-theme'
        // );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $data = array(
            'theme' => 'bs5-theme',
            'title' => 'SBPedia',

        );
        return view('index', $data);
    }
}
