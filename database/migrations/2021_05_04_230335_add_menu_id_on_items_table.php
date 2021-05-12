<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMenuIdOnItemsTable extends Migration
{

    public function up() : void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->integer('menu_id')->after('id');
            $table->integer('row_order')->after('price');
        });
    }

    public function down() : void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn(['menu_id', 'row_order']);
        });
    }
}
