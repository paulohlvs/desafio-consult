<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'telefone',
        'ddd',
        'membro_id',
        'user_id',
    ];

    public function membro() {
        return $this->belongsTo('App\Models\Membros', 'membro_id');
    }
}
