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
    //al momento de ejecutar php artisan migrate si se esta en linux dse debe
    // instalar php-mysql sudo apt install php-mysql
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('price', 20);
            $table->string('image', 255);
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
