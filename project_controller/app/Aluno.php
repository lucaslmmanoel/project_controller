<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'tb_aluno';
    protected $primaryKey = 'id_aluno';
    protected $fillable = ['tx_nome','tx_sobrenome',
        'tx_curso', 'nu_semestre'];
    public $timestamps = true;
    
}
