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

        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_min');
            $table->dropColumn('estoque_max');
        });

        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->double('preco_venda', 8, 2);
            $table->integer('estoque_min');
            $table->integer('estoque_max');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('filial_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('filial_id')->references('id')->on('filiais');
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

        Schema::table('products', function (Blueprint $table) {
            $table->double('preco_venda', 8, 2);
            $table->integer('estoque_min');
            $table->integer('estoque_max');
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
