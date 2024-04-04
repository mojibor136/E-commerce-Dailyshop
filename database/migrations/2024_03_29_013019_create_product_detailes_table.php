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
        Schema::create('product_detailes', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->default(0);
            $table->string('productImg')->default(0);
            $table->string('productSize')->default(0);
            $table->string('productColor')->default(0);
            $table->string('warranty')->default(0);
            $table->string('gender')->default(0);
            $table->string('productBrand')->default(0);
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
        Schema::dropIfExists('product_detailes');
    }
};
