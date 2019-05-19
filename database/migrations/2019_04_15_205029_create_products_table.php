<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
			$table->string('name', 255);
			$table->string('slug');
			$table->text('description')->nullable();
			$table->string('extract', 300);
			$table->decimal('price', 5, 2);
			$table->string('image', 300);
			$table->boolean('visible');
			$table->unsignedBigInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
