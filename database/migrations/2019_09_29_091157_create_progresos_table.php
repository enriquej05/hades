<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aspirante_id');
            $table->unsignedBigInteger('curso_id');
            $table->string('progreso');
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
        Schema::dropIfExists('progresos');
    }
}
