<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verhuringen', function (Blueprint $table) {
            $table->id('VerhuurID');
            $table->string('Verhuurdataum');
            $table->int('KlantID');
            $table->int('AutoID');
            $table-> foreign('KlantiD')->references('KlantID')->on('klanten');
            $table-> foreign('AutoID')->references('AutoID')->on('Autos');
            $table->string('Huurperiode');
            $table->DECIMAL('Kosten',$precision = 10, $scale = 2);
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verhuringen');
    }
};
