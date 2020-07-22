<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'valor', 'imagem', 'venda', 'qualidade'
    ];
}
