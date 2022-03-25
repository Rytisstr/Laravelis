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
        Schema::table('naudotojais', function (Blueprint $table) {
            $table->string('mokejimas');
            $table->dropColumn('gyvenamoji_vieta');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naudotojais', function (Blueprint $table) {
        $table->string('gyvenamoji_vieta');
        $table->dropColumn('mokejimas');
    });
    }
};
