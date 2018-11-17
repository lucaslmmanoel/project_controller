<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoModel extends Model
{
    protected $table = 'tb_projeto';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_projeto';
    protected $fillable = [
        'nome',
        'status',
        'valor',
        'dt_inicio',
        'dt_fim',
        'id_tipo_projeto',
        'id_demandante',
    ];
}
