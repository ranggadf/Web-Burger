<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Menampilkan formulir untuk membuat menu baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('create_menu');
    }

    /**
     * Menyimpan menu baru ke database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string',
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageBase64 = base64_encode(file_get_contents($image));

        $menu = new Menu();
        $menu->jenis = $request->jenis;
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;
        $menu->gambar = $imageBase64;
        $menu->save();

        return back()->with('success', 'Menu created successfully.');
    }

    public function index()
    {
        $menus = Menu::take(5)->get();
        return view('beranda1', compact('menus'));
    }

    public function showMakanan()
    {
        $menus = Menu::where('jenis', 'makanan')->get();
        return view('menu1', compact('menus'));
    }

    public function showMinuman()
    {
        $menus = Menu::where('jenis', 'minuman')->get();
        return view('menu_minuman', compact('menus'));
    }

    public function showDetail($id_menu)
    {
        $menus = Menu::find($id_menu); // Mengambil data menu berdasarkan ID
        return view('deskripsimenu', compact('menus'));
    }


}
