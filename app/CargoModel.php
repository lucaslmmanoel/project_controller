<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoModel extends Model
{
    protected $table = 'tb_cargo';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_cargo';
    protected $fillable = [
        'nome',
        'desc',
        'status',
    ];
}
