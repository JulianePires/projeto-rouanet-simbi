<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain;

use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAcessibilidade;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectAnoProjeto;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectArea;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectCreatedAt;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEstrategiaExecucao;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataInicio;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDataTermino;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectDemocratizacao;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEnquadramento;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEspecificacaoTecnica;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectEtapa;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectFichaTecnica;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectId;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectImpactoAmbiental;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectJustificativa;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectLinkIncentivadores;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectMecanismo;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectMunicipio;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectNome;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectObjetivo;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectObjetivos;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectOutrasFontes;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectPronac;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectProvidencia;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectResumo;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSegmento;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSinopse;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectSituacao;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectUf;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectUpdatedAt;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorAprovado;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorCaptado;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorProjeto;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorProposta;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectValorSolicitado;

/**
 * @OA\Schema(
 *  schema="RouanetProject"
 * )
 */
final class RouanetProject
{
    /**
     * The project id,
     * @var int
     * @OA\Property()
     */
    private $idProjeto;
    /**
     * The pronac number,
     * @var string
     * @OA\Property()
     */
    private $pronac;
    /**
     * The project year,
     * @var string
     * @OA\Property()
     */
    private $anoProjeto;
    /**
     * The project name,
     * @var string
     * @OA\Property()
     */
    private $nome;
    /**
     * The segment,
     * @var string
     * @OA\Property()
     */
    private $segmento;
    /**
     * The project area,
     * @var string
     * @OA\Property()
     */
    private $area;
    /**
     * The project uf,
     * @var string
     * @OA\Property()
     */
    private $uf;
    /**
     * The project city,
     * @var string
     * @OA\Property()
     */
    private $municipio;
    /**
     * The project beginning date,
     * @var string
     * @OA\Property()
     */
    private $dataInicio;
    /**
     * The project finish date,
     * @var string
     * @OA\Property()
     */
    private $dataTermino;
    /**
     * The project situation,
     * @var string
     * @OA\Property()
     */
    private $situacao;
    /**
     * The project mecanism,
     * @var string
     * @OA\Property()
     */
    private $mecanismo;
    /**
     * The project framework,
     * @var string
     * @OA\Property()
     */
    private $enquadramento;
    /**
     * The project raised amount,
     * @var string
     * @OA\Property()
     */
    private $valorCaptado;
    /**
     * The project approved amount,
     * @var string
     * @OA\Property()
     */
    private $valorAprovado;
    /**
     * The project acessibility,
     * @var string
     * @OA\Property()
     */
    private $acessibilidade;
    /**
     * The project objectives,
     * @var string
     * @OA\Property()
     */
    private $objetivos;
    /**
     * The project justifyments,
     * @var string
     * @OA\Property()
     */
    private $justificativa;
    /**
     * The project stage,
     * @var string
     * @OA\Property()
     */
    private $etapa;
    /**
     * The project datasheet,
     * @var string
     * @OA\Property()
     */
    private $fichaTecnica;
    /**
     * The project ambiental impact,
     * @var string
     * @OA\Property()
     */
    private $impactoAmbiental;
    /**
     * The project tecnical specificity,
     * @var string
     * @OA\Property()
     */
    private $especificacaoTecnica;
    /**
     * The project providency,
     * @var string
     * @OA\Property()
     */
    private $providencia;
    /**
     * The project democratization,
     * @var string
     * @OA\Property()
     */
    private $democratizacao;
    /**
     * The project sinopse,
     * @var string
     * @OA\Property()
     */
    private $sinopse;
    /**
     * The project summary,
     * @var string
     * @OA\Property()
     */
    private $resumo;
    /**
     * The project creation date,
     * @var string
     * @OA\Property()
     */
    private $createdAt;
    /**
     * The project update date,
     * @var string
     * @OA\Property()
     */
    private $updatedAt;
    /**
     * The project value,
     * @var string
     * @OA\Property()
     */
    private $valorProjeto;
    /**
     * The project other sources,
     * @var string
     * @OA\Property()
     */
    private $outrasFontes;
    /**
     * The project propouse value,
     * @var string
     * @OA\Property()
     */
    private $valorProposta;
    /**
     * The project requested value,
     * @var string
     * @OA\Property()
     */
    private $valorSolicitado;
    /**
     * The project objective,
     * @var string
     * @OA\Property()
     */
    private $objetivo;
    /**
     * The project execution strategy,
     * @var string
     * @OA\Property()
     */
    private $estrategiaExecucao;
    /**
     * The project link boosters,
     * @var string
     * @OA\Property()
     */
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
