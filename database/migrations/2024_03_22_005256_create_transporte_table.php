<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteTable extends Migration
{
    public function up()
    {
        Schema::create('transporte', function (Blueprint $table) {
            $table->id('id_transporte');
            $table->string('codigo', 45);
            $table->string('nombre', 125);
            $table->string('razon_social', 175)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transporte');
    }
}
