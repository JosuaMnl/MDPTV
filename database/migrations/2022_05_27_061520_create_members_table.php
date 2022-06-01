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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 45);
            $table->string('email', 45)->unique();
            $table->char('no_hp', 13);
            $table->string('alamat', 45);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('angkatan');
            $table->enum('status', ['aktif', 'tidak']);
            $table->foreignId('study_programs_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('divisions_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('positions_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
