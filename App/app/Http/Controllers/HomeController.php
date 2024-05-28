<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * Menampilkan tampilan welcome.
     *
     * @return \Illuminate\View\View
     */
    public function showWelcome()
    {
        return view('index');
}
}
