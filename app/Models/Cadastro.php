<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    //Nome das colunas no banco
    protected $fillable = ['nome', 'sobrenome', 'cpf', 'email', 'email_secundario', 'telefone', 'telefone_secundario'];
}
