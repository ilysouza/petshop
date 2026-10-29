<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string("nome_produto", 255);
            $table->text("descricao");
            $table->string("marca", 100);
            $table->string("categoria", 50);
            $table->decimal("preco_custo", 8,2);
            $table->decimal("preco_venda", 8,2);
            $table->integer("quantidade_disponivel");
            $table->integer("estoque_minimo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
