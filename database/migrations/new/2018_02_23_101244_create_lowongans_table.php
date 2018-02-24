<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('judul');
            $table->string('hari');
            $table->string('jam');
            $table->string('pendidikan');
            $table->string('gaji');
            $table->string('kelamin');
            $table->string('deskripsi');
            $table->string('kontak');
            $table->string('foto');
            $table->string('ijin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongans');
    }
}
