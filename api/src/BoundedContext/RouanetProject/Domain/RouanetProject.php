<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain;

use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAcessibilidade;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAnoProjeto;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectArea;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectCreatedAt;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEstrategiaExecucao;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataInicio;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataTermino;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDemocratizacao;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEnquadramento;
use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEspecificacaoTecnica;
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



final class RouanetProject
{
    private $idProjeto;
    private $pronac;
    private $anoProjeto;
    private $nome;
    private $segmento;
    private $area;
    private $uf;
    private $municipio;
    private $dataInicio;
    private $dataTermino;
    private $situacao;
    private $mecanismo;
    private $enquadramento;
    private $valorCaptado;
    private $valorAprovado;
    private $acessibilidade;
    private $objetivos;
    private $justificativa;
    private $etapa;
    private $fichaTecnica;
    private $impactoAmbiental;
    private $especificacaoTecnica;
    private $providencia;
    private $democratizacao;
    private $sinopse;
    private $resumo;
    private $createdAt;
    private $updatedAt;
    private $valorProjeto;
    private $outrasFontes;
    private $valorProposta;
    private $valorSolicitado;
    private $objetivo;
    private $estrategiaExecucao;
    private $linkIncentivadores;

    public function __construct(
        RouanetProjectId $idProjeto,
        RouanetProjectPronac $pronac,
        RouanetProjectAnoProjeto $anoProjeto,
        RouanetProjectNome $nome,
        RouanetProjectSegmento $segmento,
        RouanetProjectArea $area,
        RouanetProjectUf $uf,
        RouanetProjectMunicipio $municipio,
        RouanetProjectDataInicio $dataInicio,
        RouanetProjectDataTermino $dataTermino,
        RouanetProjectSituacao $situacao,
        RouanetProjectMecanismo $mecanismo,
        RouanetProjectEnquadramento $enquadramento,
        RouanetProjectValorCaptado $valorCaptado,
        RouanetProjectValorAprovado $valorAprovado,
        RouanetProjectAcessibilidade $acessibilidade,
        RouanetProjectObjetivos $objetivos,
        RouanetProjectJustificativa $justificativa,
        RouanetProjectEtapa $etapa,
        RouanetProjectFichaTecnica $fichaTecnica,
        RouanetProjectImpactoAmbiental $impactoAmbiental,
        RouanetProjectEspecificacaoTecnica $especificacaoTecnica,
        RouanetProjectProvidencia $providencia,
        RouanetProjectDemocratizacao $democratizacao,
        RouanetProjectSinopse $sinopse,
        RouanetProjectResumo $resumo,
        RouanetProjectCreatedAt $createdAt,
        RouanetProjectUpdatedAt $updatedAt,
        RouanetProjectValorProjeto $valorProjeto,
        RouanetProjectOutrasFontes $outrasFontes,
        RouanetProjectValorProposta $valorProposta,
        RouanetProjectValorSolicitado $valorSolicitado,
        RouanetProjectObjetivo $objetivo,
        RouanetProjectEstrategiaExecucao $estrategiaExecucao,
        RouanetProjectLinkIncentivadores $linkIncentivadores
    ) {
        $this->idProjeto = $idProjeto;
        $this->pronac = $pronac;
        $this->anoProjeto = $anoProjeto;
        $this->nome = $nome;
        $this->segmento = $segmento;
        $this->area = $area;
        $this->uf = $uf;
        $this->municipio = $municipio;
        $this->dataInicio = $dataInicio;
        $this->dataTermino = $dataTermino;
        $this->situacao = $situacao;
        $this->mecanismo = $mecanismo;
        $this->enquadramento = $enquadramento;
        $this->valorCaptado = $valorCaptado;
        $this->valorAprovado = $valorAprovado;
        $this->acessibilidade = $acessibilidade;
        $this->objetivos = $objetivos;
        $this->justificativa = $justificativa;
        $this->etapa = $etapa;
        $this->fichaTecnica = $fichaTecnica;
        $this->impactoAmbiental = $impactoAmbiental;
        $this->especificacaoTecnica = $especificacaoTecnica;
        $this->providencia = $providencia;
        $this->democratizacao = $democratizacao;
        $this->sinopse = $sinopse;
        $this->resumo = $resumo;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->valorProjeto = $valorProjeto;
        $this->outrasFontes = $outrasFontes;
        $this->valorProposta = $valorProposta;
        $this->valorSolicitado = $valorSolicitado;
        $this->objetivo = $objetivo;
        $this->estrategiaExecucao = $estrategiaExecucao;
        $this->linkIncentivadores = $linkIncentivadores;
    }

    public function idProjeto(): RouanetProjectId
    {
        return $this->idProjeto;
    }

    public function nome(): RouanetProjectNome
    {
        return $this->nome;
    }

    public function pronac(): RouanetProjectPronac
    {
        return $this->pronac;
    }

    public function anoProjeto(): RouanetProjectAnoProjeto
    {
        return $this->anoProjeto;
    }

    public function segmento(): RouanetProjectSegmento
    {
        return $this->segmento;
    }

    public function area(): RouanetProjectArea
    {
        return $this->area;
    }

    public function uf(): RouanetProjectUf
    {
        return $this->uf;
    }

    public function municipio(): RouanetProjectMunicipio
    {
        return $this->municipio;
    }

    public function dataInicio(): RouanetProjectDataInicio
    {
        return $this->dataInicio;
    }

    public function dataTermino(): RouanetProjectDataTermino
    {
        return $this->dataTermino;
    }

    public function situacao(): RouanetProjectSituacao
    {
        return $this->situacao;
    }

    public function mecanismo(): RouanetProjectMecanismo
    {
        return $this->mecanismo;
    }

    public function enquadramento(): RouanetProjectEnquadramento
    {
        return $this->enquadramento;
    }

    public function valorCaptado(): RouanetProjectValorCaptado
    {
        return $this->valorCaptado;
    }

    public function valorAprovado(): RouanetProjectValorAprovado
    {
        return $this->valorAprovado;
    }

    public function acessibilidade(): RouanetProjectAcessibilidade
    {
        return $this->acessibilidade;
    }

    public function objetivos(): RouanetProjectObjetivos
    {
        return $this->objetivos;
    }

    public function justificativa(): RouanetProjectJustificativa
    {
        return $this->justificativa;
    }

    public function etapa(): RouanetProjectEtapa
    {
        return $this->etapa;
    }

    public function fichaTecnica(): RouanetProjectFichaTecnica
    {
        return $this->fichaTecnica;
    }

    public function impactoAmbiental(): RouanetProjectImpactoAmbiental
    {
        return $this->impactoAmbiental;
    }

    public function especificacaoTecnica(): RouanetProjectEspecificacaoTecnica
    {
        return $this->especificacaoTecnica;
    }

    public function providencia(): RouanetProjectProvidencia
    {
        return $this->providencia;
    }

    public function democratizacao(): RouanetProjectDemocratizacao
    {
        return $this->democratizacao;
    }

    public function sinopse(): RouanetProjectSinopse
    {
        return $this->sinopse;
    }

    public function resumo(): RouanetProjectResumo
    {
        return $this->resumo;
    }

    public function createdAt(): RouanetProjectCreatedAt
    {
        return $this->createdAt;
    }

    public function updatedAt(): RouanetProjectUpdatedAt
    {
        return $this->updatedAt;
    }

    public function valorProjeto(): RouanetProjectValorProjeto
    {
        return $this->valorProjeto;
    }

    public function outrasFontes(): RouanetProjectOutrasFontes
    {
        return $this->outrasFontes;
    }

    public function valorProposta(): RouanetProjectValorProposta
    {
        return $this->valorProposta;
    }

    public function valorSolicitado(): RouanetProjectValorSolicitado
    {
        return $this->valorSolicitado;
    }

    public function objetivo(): RouanetProjectObjetivo
    {
        return $this->objetivo;
    }

    public function estrategiaExecucao(): RouanetProjectEstrategiaExecucao
    {
        return $this->estrategiaExecucao;
    }

    public function linkIncentivadores(): RouanetProjectLinkIncentivadores
    {
        return $this->linkIncentivadores;
    }

    public static function create(
        RouanetProjectId $idProjeto,
        RouanetProjectPronac $pronac,
        RouanetProjectAnoProjeto $anoProjeto,
        RouanetProjectNome $nome,
        RouanetProjectSegmento $segmento,
        RouanetProjectArea $area,
        RouanetProjectUf $uf,
        RouanetProjectMunicipio $municipio,
        RouanetProjectDataInicio $dataInicio,
        RouanetProjectDataTermino $dataTermino,
        RouanetProjectSituacao $situacao,
        RouanetProjectMecanismo $mecanismo,
        RouanetProjectEnquadramento $enquadramento,
        RouanetProjectValorCaptado $valorCaptado,
        RouanetProjectValorAprovado $valorAprovado,
        RouanetProjectAcessibilidade $acessibilidade,
        RouanetProjectObjetivos $objetivos,
        RouanetProjectJustificativa $justificativa,
        RouanetProjectEtapa $etapa,
        RouanetProjectFichaTecnica $fichaTecnica,
        RouanetProjectImpactoAmbiental $impactoAmbiental,
        RouanetProjectEspecificacaoTecnica $especificacaoTecnica,
        RouanetProjectProvidencia $providencia,
        RouanetProjectDemocratizacao $democratizacao,
        RouanetProjectSinopse $sinopse,
        RouanetProjectResumo $resumo,
        RouanetProjectCreatedAt $createdAt,
        RouanetProjectUpdatedAt $updatedAt,
        RouanetProjectValorProjeto $valorProjeto,
        RouanetProjectOutrasFontes $outrasFontes,
        RouanetProjectValorProposta $valorProposta,
        RouanetProjectValorSolicitado $valorSolicitado,
        RouanetProjectObjetivo $objetivo,
        RouanetProjectEstrategiaExecucao $estrategiaExecucao,
        RouanetProjectLinkIncentivadores $linkIncentivadores
    ): RouanetProject {
        $rouanetProject = new self(
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

        return $rouanetProject;
    }
}
