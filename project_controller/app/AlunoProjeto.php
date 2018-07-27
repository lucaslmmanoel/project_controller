<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoProjeto extends Model
{
    protected $table = "tb_aluno_projeto";
    protected $primaryKey = "id_aluno_projeto";
    protected $fillable = ['fk_aluno', 'fk_projeto', 'nu_nota'];
    public $timestamps = true;
}
