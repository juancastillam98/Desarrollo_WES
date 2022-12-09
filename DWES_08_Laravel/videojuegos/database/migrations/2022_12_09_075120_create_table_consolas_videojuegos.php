<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConsolasVideojuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tendrá los id de las consolas y videojuegos (las tablas que asocia)
        Schema::create('consolas_videojuegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("consola_id");
            $table->unsignedBigInteger("videojuego_id");
            $table->foreign("consola_id")->references("id")->on("consolas")->onDelete("cascade");
            $table->foreign("videojuego_id")->references("id")->on("videojuegos")->onDelete("cascade");
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
        Schema::dropIfExists('table_consolas_videojuegos');
    }
}
