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
        Schema::create('cooperations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_kegiatan', 125);
            $table->date('tanggal_kegiatan');
            $table->char('no_hp', 13);
            $table->string('lokasi', 125);
            $table->string('surat_izin', 45);
            $table->string('surat_kerjasama', 45);
            $table->enum('status', ['Ya', 'Tidak', 'Sedang Proses']);
            $table->foreignId('organizers_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('users_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cooperations');
    }
};
