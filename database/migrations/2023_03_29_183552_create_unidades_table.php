<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); //cm mm kg
            $table->string('descricao', 30);
            $table->timestamps();

        });

        //Constraint
        //Criando chaves estrangeiras de 1 para muitos nas tableas abaixo 
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
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
        //Removendo chave extrangeira da tablea product.
            $table->dropForeign('products_unidade_id_foreign');
        //Removendo A coluna unidades_id da tabela product.   
            $table->dropColumn('unidade_id');
        });
 
        Schema::table('product_details', function (Blueprint $table) {
        //Removendo chave extrageira da tabela product_details
            $table->dropForeign('product_details_unidade_id_foreign');
        //Removendo a coluna unidade_id da tabela product_details.    
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};
