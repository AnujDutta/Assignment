<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Categories');
            $table->string('name');
            $table->string('brand');
            $table->decimal('price', 10, 2); // Assuming price is a decimal
            $table->decimal('originalPrice', 10, 2); // Assuming originalPrice is a decimal
            $table->string('imageSrc');
            $table->string('stockStatus');
            $table->string('Description');
            $table->string('SmallDescription');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
