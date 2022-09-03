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
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->decimal('regular_price')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->string('SKU')->nullable();
            $table->enum('stock' , ['inStock' , 'outStock']);
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(0);
            $table->integer('quantity')->nullable();
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
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
