<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->id('idtar');
            $table->string('titulo', 255);
            $table->text('texto');
            $table->date('fecha');
            $table->integer('completa')->default(false);
            $table->timestamps();
            $table->foreignId('idusu')
                    ->references('idusu')
                    ->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea');
    }
}
