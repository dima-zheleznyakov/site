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
            $table->string('title');
            $table->text('description');
            $table->text('images');
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('old-price')->nullable();
            $table->unsignedBigInteger('discount')->nullable();
            $table->boolean('is_published')->default(1);

            $table->unsignedBigInteger('sub_category_id');
            $table->index('sub_category_id', 'product_category_idx');
            $table->foreign('sub_category_id', 'product_category_fk')->on('sub_categories')->references('id');

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
        Schema::dropIfExists('products');
    }
};
