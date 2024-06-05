<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struk;
use App\Models\Menu;

class StrukController extends Controller
{
    public function tambahPesanan(Request $request)
    {
        $request->validate([
            'id_menu' => 'required|exists:menu,id_menu',
            'jumlah' => 'required|integer|min:1'
        ]);

        $menu = Menu::find($request->id_menu);

        if (!$menu) {
            return response()->json(['error' => 'Menu not found'], 404);
        }

        $total = $menu->harga * $request->jumlah;

        $struk = new Struk();
        $struk->id_menu = $request->id_menu;
        $struk->jumlah = $request->jumlah;
        $struk->total = $total;
        // Simpan dulu untuk mendapatkan id_transaksi
        $struk->save();

        // Jika Anda menggunakan session, Anda bisa mengakumulasi total seperti ini:
        $totalBayar = session()->get('total_bayar', 0) + $total;
        session()->put('total_bayar', $totalBayar);

        // Perbarui total bayar pada pesanan yang baru saja dibuat
        $struk->total_bayar = $totalBayar;
        $struk->save();

        return response()->json(['message' => 'Pesanan berhasil ditambahkan', 'total_bayar' => $totalBayar]);
    }

}
