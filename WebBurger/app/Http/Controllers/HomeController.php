<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\web_burger;

class HomeController extends Controller
{
    //
    /**
     * Menampilkan tampilan welcome.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menus = Menu::all();
        return view('beranda1', compact('menus'));
    }
}