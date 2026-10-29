<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'descricao',
        'marca',
        'categoria',
        'preco_custo',
        'preco_venda',
        'quantidade_disponivel',
        'estoque_minimo'
    ];

    public function movimentacoes(): HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }

    public function funcionario(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
