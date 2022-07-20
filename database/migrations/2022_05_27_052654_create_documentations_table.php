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
        Schema::create('documentations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_kegiatan', 125);
            $table->date('tanggal_kegiatan');
            $table->string('lokasi', 125);
            $table->integer('semester');
            $table->text('keterangan');
            $table->string('link_dokumentasi', 256);
            $table->foreignId('periods_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('organizers_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentations');
    }
};
