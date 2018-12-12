<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePariwisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pariwisatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namatempat');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('haribuka');
            $table->string('jambuka');
            $table->string('jamtutup');
            $table->string('deskripsi');
            $table->string('foto');
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
        Schema::dropIfExists('pariwisatas');
    }
}
