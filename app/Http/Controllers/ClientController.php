<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('subscribed');
    }

    /**
     * Display the client screen.
     *
     * @return Response
     */
    public function show()
    {
        return view('client');
    }
}
