<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struk extends Model
{
    protected $table = 'struk';
    // Tentukan fillable atau guarded sesuai kebutuhan
    protected $fillable = ['id_transaksi', 'id_menu', 'jumlah', 'total', 'total_bayar'];
}

// app/Models/StrukItem.php
