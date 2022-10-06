<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedes extends Model
{
    use HasFactory;

    protected $table = 'tb_hospedes';

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'data_nascimento'
    ];

    public $timestamps = false;
}
