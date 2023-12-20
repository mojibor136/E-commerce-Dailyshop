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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('product_price');
            $table->text('product_short_desc');
            $table->text('product_long_desc');
            $table->string('product_category_name')->default("");
            $table->string('product_subcategory_name')->default("");
            $table->integer('product_category_id');
            $table->integer('product_subcategory_id');
            $table->string('quantity');
            $table->string('kay_word');
            $table->string('product_img');
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
        Schema::dropIfExists('products');
    }
};
