<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaOrdenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->charset ='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('producto_id');
            $table->bigInteger('cantidad');
            $table->double('cedula');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->timestamp ('fecha');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('producto_id')->references('id')->on('productos');
        } );   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
