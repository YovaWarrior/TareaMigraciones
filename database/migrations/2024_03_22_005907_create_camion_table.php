<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id('id_camion');
            $table->string('placa', 8);
            $table->string('codig_interno', 8);
            $table->unsignedInteger('id_transporte');
            $table->string('color', 35)->nullable();
            $table->date('modelo')->nullable();
            $table->string('capacidad_toneladas', 45)->nullable();
            $table->timestamps();

            $table->foreign('id_transporte')->references('id_transporte')->on('transporte')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->unsignedInteger('id_marca');

            $table->foreign('id_marca')->references('id_marca')->on('marca')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('camion');
    }
}
