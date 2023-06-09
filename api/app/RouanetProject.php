<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RouanetProject extends Model
{
    protected $table = 'tb_projeto_rouanet_teste';
    use HasFactory;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProjeto',
        'pronac',
        'anoProjeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'dataInicio',
        'dataTermino',
        'situacao',
        'mecanismo',
        'enquadramento',
        'valorCaptado',
        'valorAprovado',
        'acessibilidade',
        'objetivos',
        'justificativa',
        'etapa',
        'fichaTecnica',
        'impactoAmbiental',
        'especificacaoTecnica',
        'providencia',
        'democratizacao',
        'sinopse',
        'resumo',
        'createdAt',
        'updatedAt',
        'valorProjeto',
        'outrasFontes',
        'valorProposta',
        'valorSolicitado',
        'objetivo',
        'estrategiaExecucao',
        'linkIncentivadores'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'updatedAt' => 'datetime',
        'createdAt' => 'datetime'
    ];
}
