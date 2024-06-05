<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Struk;
class StrukController extends Controller
{
    public function tambahPesanan(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'jumlah' => 'required|integer|min:1'
        ]);

        $menu = Menu::find($request->menu_id);

        if (!$menu) {
            return response()->json(['error' => 'Menu not found'], 404);
        }

        $total = $menu->harga * $request->jumlah;

        $struk = new Struk();
        $struk->menu_id = $request->menu_id;
        $struk->jumlah = $request->jumlah;
        $struk->total = $total;
        $struk->save();

        return response()->json(['message' => 'Pesanan berhasil ditambahkan', 'total_bayar' => $total]);
    }
}
