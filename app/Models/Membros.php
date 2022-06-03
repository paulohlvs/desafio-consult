<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'nascimento',
        'user_id',
    ];

    public function enderecos() {
        return $this->hasMany('App\Models\Enderecos', 'membro_id', 'id');
    }
    public function contatos() {
        return $this->hasMany('App\Models\Contatos', 'membro_id', 'id');
    }
}
