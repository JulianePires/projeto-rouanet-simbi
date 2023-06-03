<?php

declare(strict_types=1);

namespace Src\BoundedContext\User\Infrastructure\Repositories;

use App\RouanetProject as EloquentRouanetProjectModel;
use RouanetProjectRepositoryContract;
use Src\BoundedContext\RouanetProject\Domain\RouanetProject;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAcessibilidade;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAnoProjeto;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectArea;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectCreatedAt;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataInicio;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataTermino;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDemocratizacao;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEnquadramento;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEspecificacaoTecnica;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEstrategiaExecucao;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEtapa;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectFichaTecnica;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectId;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectImpactoAmbiental;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectJustificativa;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectLinkIncentivadores;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectMecanismo;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectMunicipio;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectNome;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectObjetivo;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectObjetivos;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectOutrasFontes;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectPronac;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectProvidencia;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectResumo;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSegmento;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSinopse;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSituacao;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectUf;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectUpdatedAt;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorAprovado;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorCaptado;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorProjeto;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorProposta;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorSolicitado;


final class EloquentRouanetProjectRepository implements RouanetProjectRepositoryContract
{
    private $eloquentRouanetProjectModel;

    public function __construct()
    {
        $this->eloquentRouanetProjectModel = new EloquentRouanetProjectModel;
    }

    public function find(RouanetProjectId $idProjeto): ?RouanetProject
    {
        $rouanetProject = $this->eloquentRouanetProjectModel->findOrFail($idProjeto->value());

        // Return Domain RouanetProject model
        return new RouanetProject(
            new RouanetProjectId($rouanetProject->idProjeto),
            new RouanetProjectPronac($rouanetProject->pronac),
            new RouanetProjectAnoProjeto($rouanetProject->anoProjeto),
            new RouanetProjectNome($rouanetProject->nome),
            new RouanetProjectSegmento($rouanetProject->segmento),
            new RouanetProjectArea($rouanetProject->area),
            new RouanetProjectUf($rouanetProject->uf),
            new RouanetProjectMunicipio($rouanetProject->municipio),
            new RouanetProjectDataInicio($rouanetProject->dataInicio),
            new RouanetProjectDataTermino($rouanetProject->dataTermino),
            new RouanetProjectSituacao($rouanetProject->situacao),
            new RouanetProjectMecanismo($rouanetProject->mecanismo),
            new RouanetProjectEnquadramento($rouanetProject->enquadramento),
            new RouanetProjectValorCaptado($rouanetProject->valorCaptado),
            new RouanetProjectValorAprovado($rouanetProject->valorAprovado),
            new RouanetProjectAcessibilidade($rouanetProject->acessibilidade),
            new RouanetProjectObjetivos($rouanetProject->objetivos),
            new RouanetProjectJustificativa($rouanetProject->justificativa),
            new RouanetProjectEtapa($rouanetProject->etapa),
            new RouanetProjectFichaTecnica($rouanetProject->fichaTecnica),
            new RouanetProjectImpactoAmbiental($rouanetProject->impactoAmbiental),
            new RouanetProjectEspecificacaoTecnica($rouanetProject->especificacaoTecnica),
            new RouanetProjectProvidencia($rouanetProject->providencia),
            new RouanetProjectDemocratizacao($rouanetProject->democratizacao),
            new RouanetProjectSinopse($rouanetProject->sinopse),
            new RouanetProjectResumo($rouanetProject->resumo),
            new RouanetProjectCreatedAt($rouanetProject->createdAt),
            new RouanetProjectUpdatedAt($rouanetProject->updatedAt),
            new RouanetProjectValorProjeto($rouanetProject->valorProjeto),
            new RouanetProjectOutrasFontes($rouanetProject->outrasFontes),
            new RouanetProjectValorProposta($rouanetProject->valorProposta),
            new RouanetProjectValorSolicitado($rouanetProject->valorSolicitado),
            new RouanetProjectObjetivo($rouanetProject->objetivo),
            new RouanetProjectEstrategiaExecucao($rouanetProject->estrategiaExecucao),
            new RouanetProjectLinkIncentivadores($rouanetProject->linkIncentivadores)
        );
    }

    public function findAll(): array
    {
        $rouanetProjects = $this->eloquentRouanetProjectModel->all();

        return $rouanetProjects;
    }

    public function findByName(RouanetProjectNome $nome): ?RouanetProject
    {
        $rouanetProject = $this->eloquentRouanetProjectModel
            ->where('nome', $nome->value())
            ->firstOrFail();

        // Return Domain User model
       return new RouanetProject(
            new RouanetProjectId($rouanetProject->idProjeto),
            new RouanetProjectPronac($rouanetProject->pronac),
            new RouanetProjectAnoProjeto($rouanetProject->anoProjeto),
            new RouanetProjectNome($rouanetProject->nome),
            new RouanetProjectSegmento($rouanetProject->segmento),
            new RouanetProjectArea($rouanetProject->area),
            new RouanetProjectUf($rouanetProject->uf),
            new RouanetProjectMunicipio($rouanetProject->municipio),
            new RouanetProjectDataInicio($rouanetProject->dataInicio),
            new RouanetProjectDataTermino($rouanetProject->dataTermino),
            new RouanetProjectSituacao($rouanetProject->situacao),
            new RouanetProjectMecanismo($rouanetProject->mecanismo),
            new RouanetProjectEnquadramento($rouanetProject->enquadramento),
            new RouanetProjectValorCaptado($rouanetProject->valorCaptado),
            new RouanetProjectValorAprovado($rouanetProject->valorAprovado),
            new RouanetProjectAcessibilidade($rouanetProject->acessibilidade),
            new RouanetProjectObjetivos($rouanetProject->objetivos),
            new RouanetProjectJustificativa($rouanetProject->justificativa),
            new RouanetProjectEtapa($rouanetProject->etapa),
            new RouanetProjectFichaTecnica($rouanetProject->fichaTecnica),
            new RouanetProjectImpactoAmbiental($rouanetProject->impactoAmbiental),
            new RouanetProjectEspecificacaoTecnica($rouanetProject->especificacaoTecnica),
            new RouanetProjectProvidencia($rouanetProject->providencia),
            new RouanetProjectDemocratizacao($rouanetProject->democratizacao),
            new RouanetProjectSinopse($rouanetProject->sinopse),
            new RouanetProjectResumo($rouanetProject->resumo),
            new RouanetProjectCreatedAt($rouanetProject->createdAt),
            new RouanetProjectUpdatedAt($rouanetProject->updatedAt),
            new RouanetProjectValorProjeto($rouanetProject->valorProjeto),
            new RouanetProjectOutrasFontes($rouanetProject->outrasFontes),
            new RouanetProjectValorProposta($rouanetProject->valorProposta),
            new RouanetProjectValorSolicitado($rouanetProject->valorSolicitado),
            new RouanetProjectObjetivo($rouanetProject->objetivo),
            new RouanetProjectEstrategiaExecucao($rouanetProject->estrategiaExecucao),
            new RouanetProjectLinkIncentivadores($rouanetProject->linkIncentivadores)
        );
    }

    public function save(RouanetProject $rouanetProject): void
    {
        $newRouanetProject = $this->eloquentRouanetProjectModel;

        $data = [
            'idProjeto' => $rouanetProject->idProjeto()->value(),
            'pronac' => $rouanetProject->pronac()->value(),
            'anoProjeto' => $rouanetProject->anoProjeto()->value(),
            'nome' => $rouanetProject->nome()->value(),
            'segmento' => $rouanetProject->segmento()->value(),
            'area' => $rouanetProject->area()->value(),
            'uf' => $rouanetProject->uf()->value(),
            'municipio' => $rouanetProject->municipio()->value(),
            'dataInicio' => $rouanetProject->dataInicio()->value(),
            'dataTermino' => $rouanetProject->dataTermino()->value(),
            'situacao' => $rouanetProject->situacao()->value(),
            'mecanismo' => $rouanetProject->mecanismo()->value(),
            'enquadramento' => $rouanetProject->enquadramento()->value(),
            'valorCaptado' => $rouanetProject->valorCaptado()->value(),
            'valorAprovado' => $rouanetProject->valorAprovado()->value(),
            'acessibilidade' => $rouanetProject->acessibilidade()->value(),
            'objetivos' => $rouanetProject->objetivos()->value(),
            'justificativa' => $rouanetProject->justificativa()->value(),
            'etapa' => $rouanetProject->etapa()->value(),
            'fichaTecnica' => $rouanetProject->fichaTecnica()->value(),
            'impactoAmbiental' => $rouanetProject->impactoAmbiental()->value(),
            'especificacaoTecnica' => $rouanetProject->especificacaoTecnica()->value(),
            'providencia' => $rouanetProject->providencia()->value(),
            'democratizacao' => $rouanetProject->democratizacao()->value(),
            'sinopse' => $rouanetProject->sinopse()->value(),
            'resumo' => $rouanetProject->resumo()->value(),
            'createdAt' => $rouanetProject->createdAt()->value(),
            'updatedAt' => $rouanetProject->updatedAt()->value(),
            'valorProjeto' => $rouanetProject->valorProjeto()->value(),
            'outrasFontes' => $rouanetProject->outrasFontes()->value(),
            'valorProposta' => $rouanetProject->valorProposta()->value(),
            'valorSolicitado' => $rouanetProject->valorSolicitado()->value(),
            'objetivo' => $rouanetProject->objetivo()->value(),
            'estrategiaExecucao' => $rouanetProject->estrategiaExecucao()->value(),
            'linkIncentivadores' => $rouanetProject->linkIncentivadores()->value(),
        ];

        $newRouanetProject->create($data);
    }

    public function update(RouanetProjectId $idProjeto, RouanetProject $rouanetProject): void
    {
        $rouanetProjectToUpdate = $this->eloquentRouanetProjectModel;

        $data = [
            'idProjeto' => $rouanetProject->idProjeto()->value(),
            'pronac' => $rouanetProject->pronac()->value(),
            'anoProjeto' => $rouanetProject->anoProjeto()->value(),
            'nome' => $rouanetProject->nome()->value(),
            'segmento' => $rouanetProject->segmento()->value(),
            'area' => $rouanetProject->area()->value(),
            'uf' => $rouanetProject->uf()->value(),
            'municipio' => $rouanetProject->municipio()->value(),
            'dataInicio' => $rouanetProject->dataInicio()->value(),
            'dataTermino' => $rouanetProject->dataTermino()->value(),
            'situacao' => $rouanetProject->situacao()->value(),
            'mecanismo' => $rouanetProject->mecanismo()->value(),
            'enquadramento' => $rouanetProject->enquadramento()->value(),
            'valorCaptado' => $rouanetProject->valorCaptado()->value(),
            'valorAprovado' => $rouanetProject->valorAprovado()->value(),
            'acessibilidade' => $rouanetProject->acessibilidade()->value(),
            'objetivos' => $rouanetProject->objetivos()->value(),
            'justificativa' => $rouanetProject->justificativa()->value(),
            'etapa' => $rouanetProject->etapa()->value(),
            'fichaTecnica' => $rouanetProject->fichaTecnica()->value(),
            'impactoAmbiental' => $rouanetProject->impactoAmbiental()->value(),
            'especificacaoTecnica' => $rouanetProject->especificacaoTecnica()->value(),
            'providencia' => $rouanetProject->providencia()->value(),
            'democratizacao' => $rouanetProject->democratizacao()->value(),
            'sinopse' => $rouanetProject->sinopse()->value(),
            'resumo' => $rouanetProject->resumo()->value(),
            'createdAt' => $rouanetProject->createdAt()->value(),
            'updatedAt' => $rouanetProject->updatedAt()->value(),
            'valorProjeto' => $rouanetProject->valorProjeto()->value(),
            'outrasFontes' => $rouanetProject->outrasFontes()->value(),
            'valorProposta' => $rouanetProject->valorProposta()->value(),
            'valorSolicitado' => $rouanetProject->valorSolicitado()->value(),
            'objetivo' => $rouanetProject->objetivo()->value(),
            'estrategiaExecucao' => $rouanetProject->estrategiaExecucao()->value(),
            'linkIncentivadores' => $rouanetProject->linkIncentivadores()->value(),
        ];

        $rouanetProjectToUpdate
            ->findOrFail($idProjeto->value())
            ->update($data);
    }

    public function delete(RouanetProjectId $idProjeto): void
    {
        $this->eloquentRouanetProjectModel
            ->findOrFail($idProjeto->value())
            ->delete();
    }
}
