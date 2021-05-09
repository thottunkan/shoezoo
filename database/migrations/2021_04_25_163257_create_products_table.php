<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string("company_name");
            $table->string("model_name");
            $table->string("category");
            $table->unsignedBigInteger('price');

            $table->string("sole");
            $table->string("closure");
            $table->string("shoe_width");
            $table->string("outer_material");
            $table->string("product_dimension");
            $table->string("date_first_available");
            $table->string("manufacturer");
            $table->string("asin");
            $table->string("item_model_number");
            $table->string("department");
            $table->string("packer");
            $table->string("item_weight");
            $table->binary("image");
            $table->string("desc");

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
}
