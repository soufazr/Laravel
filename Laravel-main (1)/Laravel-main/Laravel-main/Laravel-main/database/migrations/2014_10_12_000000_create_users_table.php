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
        Schema::create('Autos', function (Blueprint $table) {
            $table->id('AutoID');
            $table->string('Merk');
            $table->string('Model');
            $table->int('Jaar');
            $table->string('Kenteken');
            $table->string('Beschikbaarheid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Autos');
    }
};
