<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mvtascli', function (Blueprint $table) {
            $table->id();
            $table->integer('cli_id');
            $table->string('vta_mes');
            $table->string('vta-anio');
            $table->decimal('vta_monto', 10, 2);
            $table->string('vta_clascli', 1);
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
        Schema::dropIfExists('mvtascli');
    }
}
