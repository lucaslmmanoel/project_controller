<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'tb_projeto';
    protected $primaryKey = 'id_projeto';
    protected $fillable = ['tx_nome','tx_tema',
        'tx_desricao', 'dt_prazo'];
    public $timestamps = false;
    

}
