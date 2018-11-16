<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProjetoModel extends Model
{
    protected $table = 'tb_tipo_projeto';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_tipo_projeto';
    protected $fillable = [
        'nome',
        'desc',
        'status',
    ];
}
