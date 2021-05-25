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
            $table->string('title' , 5 , 100);
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->unsignedDecimal('price', 6, 2);
            $table->enum('size' , [
                'XL',
                'L',
                'M',
                'S',
                'XS',
            ])->default('M');
            $table->boolean('published')->default(false);
            $table->boolean('state')->default(false);
            $table->string('reference', 16);
            $table->unsignedInteger('category_id');
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
