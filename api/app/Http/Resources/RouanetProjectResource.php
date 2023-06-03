<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RouanetProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Map Domain RouanetProject model values
        return [
            'data' => [
                'idProjeto' => $this->idProjeto()->value(),
                'pronac' => $this->pronac()->value(),
                'anoProjeto' => $this->anoProjeto()->value(),
                'nome' => $this->nome()->value(),
                'segmento' => $this->segmento()->value(),
                'area' => $this->area()->value(),
                'uf' => $this->uf()->value(),
                'municipio' => $this->municipio()->value(),
                'dataInicio' => $this->dataInicio()->value(),
                'dataTermino' => $this->dataTermino()->value(),
                'situacao' => $this->situacao()->value(),
                'mecanismo' => $this->mecanismo()->value(),
                'enquadramento' => $this->enquadramento()->value(),
                'valorCaptado' => $this->valorCaptado()->value(),
                'valorAprovado' => $this->valorAprovado()->value(),
                'acessibilidade' => $this->acessibilidade()->value(),
                'objetivos' => $this->objetivos()->value(),
                'justificativa' => $this->justificativa()->value(),
                'etapa' => $this->etapa()->value(),
                'fichaTecnica' => $this->fichaTecnica()->value(),
                'impactoAmbiental' => $this->impactoAmbiental()->value(),
                'especificacaoTecnica' => $this->especificacaoTecnica()->value(),
                'providencia' => $this->providencia()->value(),
                'democratizacao' => $this->democratizacao()->value(),
                'sinopse' => $this->sinopse()->value(),
                'resumo' => $this->resumo()->value(),
                'createdAt' => $this->createdAt()->value(),
                'updatedAt' => $this->updatedAt()->value(),
                'valorProjeto' => $this->valorProjeto()->value(),
                'outrasFontes' => $this->outrasFontes()->value(),
                'valorProposta' => $this->valorProposta()->value(),
                'valorSolicitado' => $this->valorSolicitado()->value(),
                'objetivo' => $this->objetivo()->value(),
                'estrategiaExecucao' => $this->estrategiaExecucao()->value(),
                'linkIncentivadores' => $this->linkIncentivadores()->value()
            ]
        ];
    }
}
