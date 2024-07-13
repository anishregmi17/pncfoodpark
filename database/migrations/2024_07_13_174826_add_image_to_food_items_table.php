<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToFoodItemsTable extends Migration
{
    public function up()
    {
        Schema::table('food_items', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('food_items', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
