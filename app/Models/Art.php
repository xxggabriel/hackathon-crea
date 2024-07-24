<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $table = "arts";

    protected $fillable = [
        'numero',
        'data_registro',
        'tipo',
        'situacao',
        'responsavel_tecnico_id',
        'contratante_nome',
        'contratante_cnpj',
        'obra_ou_servico_descricao',
        'obra_ou_servico_local',
        'data_registro'
    ];

    protected $casts = [
        'data_registro' => 'datetime'
    ];

}
