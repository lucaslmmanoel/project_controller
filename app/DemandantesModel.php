<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandantesModel extends Model
{
    protected $table = 'tb_demandante';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_demandante';
    protected $fillable = [
        'nome',
        'status',
    ];
}
