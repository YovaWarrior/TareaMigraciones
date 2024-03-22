<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaTable extends Migration
{
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('descripcion', 75)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marca');
    }
}
