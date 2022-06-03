<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'tipo_endereco',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'estado',
        'cidade',
        'membro_id',
        'user_id',
    ];

    public function membro() {
        return $this->belongsTo('App\Models\Membros', 'membro_id');
    }
}
