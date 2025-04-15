<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('service', function (Blueprint $table) {
            // Přidání sloupce 'id' jako auto-increment primárního klíče
            $table->increments('id')->first();
        });
    }

    public function down()
    {
        Schema::table('service', function (Blueprint $table) {
            // Odstranění sloupce 'id' v případě rollbacku migrace
            $table->dropColumn('id');
        });
    }
};
