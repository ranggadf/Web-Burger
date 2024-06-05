<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('struks', function (Blueprint $table) {
            $table->dropColumn('total_bayar'); // Menghapus kolom total_bayar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('struks', function (Blueprint $table) {
            $table->decimal('total_bayar', 10, 2); // Jika Anda ingin memasukkan kembali kolom total_bayar ketika rollback migrasi
        });
    }
};
