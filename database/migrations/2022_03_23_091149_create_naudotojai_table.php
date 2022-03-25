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
        Schema::create('naudotojais', function (Blueprint $table) {
            $table->id();
            $table->string('vardas_pavarde');
            $table->string('el_pastas');
            $table->string('telefono_numeris');
            $table->string('gyvenamoji_vieta');
            $table->string('prierasas');
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
        Schema::dropIfExists('naudotojais');
    }
};
