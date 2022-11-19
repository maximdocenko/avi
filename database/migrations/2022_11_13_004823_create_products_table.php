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
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->integer('price')->default(0);
            $table->integer('term')->default(0);
            $table->string('reception', 255)->nullable();
            $table->string('experience', 255)->nullable();
            $table->string('address', 500)->nullable();
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
