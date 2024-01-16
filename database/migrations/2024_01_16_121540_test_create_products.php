<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\SerializableClosure\UnsignedSerializableClosure;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_create_products', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('stock');
            $table->text('comment');
            $table->text('img_path');
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
        Schema::dropIfExists('test_create_products');
    }
};
