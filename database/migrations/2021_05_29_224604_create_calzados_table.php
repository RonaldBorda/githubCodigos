<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalzadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calzados', function (Blueprint $table) {
            $table->id();
            $table->string('calzado');
            $table->string('tipo');
            $table->string('color');
            $table->string('talla');
            $table->string('marca');
            $table->string('genero');
            $table->string('edad');

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
        Schema::dropIfExists('calzados');
    }
}
