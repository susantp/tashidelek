<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('price_offer')->nullable()->default(null);
            $table->integer('price');
            $table->string('imagePath')->nullable();
            $table->integer('row_order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
