<?php

declare(strict_types=1);

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

final class CreateRouanetProjectUseCase
{
    private $repository;

    public function __construct(RouanetProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
        int $rouanetProjectIdProjeto,
        string $rouanetProjectPronac,
        string $rouanetProjectAnoProjeto,
        string $rouanetProjectNome,
        string $rouanetProjectSegmento,
        string $rouanetProjectArea,
        string $rouanetProjectUf,
        string $rouanetProjectMunicipio,
        string $rouanetProjectDataInicio,
        string $rouanetProjectDataTermino,
        string $rouanetProjectSituacao,
        string $rouanetProjectMecanismo,
        string $rouanetProjectEnquadramento,
        string $rouanetProjectValorCaptado,
        string $rouanetProjectValorAprovado,
        string $rouanetProjectAcessibilidade,
        string $rouanetProjectObjetivos,
        string $rouanetProjectJustificativa,
        string $rouanetProjectEtapa,
        string $rouanetProjectFichaTecnica,
        string $rouanetProjectImpactoAmbiental,
        string $rouanetProjectEspecificacaoTecnica,
        string $rouanetProjectProvidencia,
        string $rouanetProjectDemocratizacao,
        string $rouanetProjectSinopse,
        string $rouanetProjectResumo,
        DateTime $rouanetProjectCreatedAt,
        DateTime $rouanetProjectUpdatedAt,
        string $rouanetProjectValorProjeto,
        string $rouanetProjectOutrasFontes,
        string $rouanetProjectValorProposta,
        string $rouanetProjectValorSolicitado,
        string $rouanetProjectObjetivo,
        string $rouanetProjectEstrategiaExecucao,
        string $rouanetProjectLinkIncentivadores,
    ): void {
        $idProjeto = new RouanetProjectId($rouanetProjectIdProjeto);
        $pronac = new RouanetProjectPronac($rouanetProjectPronac);
        $anoProjeto = new RouanetProjectAnoProjeto($rouanetProjectAnoProjeto);
        $nome = new RouanetProjectNome($rouanetProjectNome);
        $segmento = new RouanetProjectSegmento($rouanetProjectSegmento);
        $area = new RouanetProjectArea($rouanetProjectArea);
        $uf = new RouanetProjectUf($rouanetProjectUf);
        $municipio = new RouanetProjectMunicipio($rouanetProjectMunicipio);
        $dataInicio = new RouanetProjectDataInicio($rouanetProjectDataInicio);
        $dataTermino = new RouanetProjectDataTermino($rouanetProjectDataTermino);
        $situacao = new RouanetProjectSituacao($rouanetProjectSituacao);
        $mecanismo = new RouanetProjectMecanismo($rouanetProjectMecanismo);
        $enquadramento = new RouanetProjectEnquadramento($rouanetProjectEnquadramento);
        $valorCaptado = new RouanetProjectValorCaptado($rouanetProjectValorCaptado);
        $valorAprovado = new RouanetProjectValorAprovado($rouanetProjectValorAprovado);
        $acessibilidade = new RouanetProjectAcessibilidade($rouanetProjectAcessibilidade);
        $objetivos = new RouanetProjectObjetivos($rouanetProjectObjetivos);
        $justificativa = new RouanetProjectJustificativa($rouanetProjectJustificativa);
        $etapa = new RouanetProjectEtapa($rouanetProjectEtapa);
        $fichaTecnica = new RouanetProjectFichaTecnica($rouanetProjectFichaTecnica);
        $impactoAmbiental = new RouanetProjectImpactoAmbiental($rouanetProjectImpactoAmbiental);
        $especificacaoTecnica = new RouanetProjectEspecificacaoTecnica($rouanetProjectEspecificacaoTecnica);
        $providencia = new RouanetProjectProvidencia($rouanetProjectProvidencia);
        $democratizacao = new RouanetProjectDemocratizacao($rouanetProjectDemocratizacao);
        $sinopse = new RouanetProjectSinopse($rouanetProjectSinopse);
        $resumo = new RouanetProjectResumo($rouanetProjectResumo);
        $createdAt = new RouanetProjectCreatedAt(strval($rouanetProjectCreatedAt));
        $updatedAt = new RouanetProjectUpdatedAt(strval($rouanetProjectUpdatedAt));
        $valorProjeto = new RouanetProjectValorProjeto($rouanetProjectValorProjeto);
        $outrasFontes = new RouanetProjectOutrasFontes($rouanetProjectOutrasFontes);
        $valorProposta = new RouanetProjectValorProposta($rouanetProjectValorProposta);
        $valorSolicitado = new RouanetProjectValorSolicitado($rouanetProjectValorSolicitado);
        $objetivo = new RouanetProjectObjetivo($rouanetProjectObjetivo);
        $estrategiaExecucao = new RouanetProjectEstrategiaExecucao($rouanetProjectEstrategiaExecucao);
        $linkIncentivadores = new RouanetProjectLinkIncentivadores($rouanetProjectLinkIncentivadores);

        $rouanetProject = RouanetProject::create(
            $idProjeto,
            $pronac,
            $anoProjeto,
            $nome,
            $segmento,
            $area,
            $uf,
            $municipio,
            $dataInicio,
            $dataTermino,
            $situacao,
            $mecanismo,
            $enquadramento,
            $valorCaptado,
            $valorAprovado,
            $acessibilidade,
            $objetivos,
            $justificativa,
            $etapa,
            $fichaTecnica,
            $impactoAmbiental,
            $especificacaoTecnica,
            $providencia,
            $democratizacao,
            $sinopse,
            $resumo,
            $createdAt,
            $updatedAt,
            $valorProjeto,
            $outrasFontes,
            $valorProposta,
            $valorSolicitado,
            $objetivo,
            $estrategiaExecucao,
            $linkIncentivadores
        );

         $this->repository->save($rouanetProject);
    }
}
