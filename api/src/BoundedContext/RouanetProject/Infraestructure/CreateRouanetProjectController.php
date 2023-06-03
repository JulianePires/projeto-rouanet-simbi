<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\Infrastructure\UseCases\CreateRouanetProjectUseCase;
use Src\BoundedContext\RouanetProject\Infrastructure\UseCases\GetByNameRouanetProjectUseCase;

final class CreateRouanetProjectController
{
    private $repository;

    public function __construct(EloquentRouanetProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $idProjeto = $request->input('idProjeto');
        $pronac = $request->input('pronac');
        $anoProjeto = $request->input('anoProjeto');
        $nome = $request->input('nome');
        $segmento = $request->input('segmento');
        $area = $request->input('area');
        $uf = $request->input('uf');
        $municipio = $request->input('municipio');
        $dataInicio = $request->input('dataInicio');
        $dataTermino = $request->input('dataTermino');
        $situacao = $request->input('situacao');
        $mecanismo = $request->input('mecanismo');
        $enquadramento = $request->input('enquadramento');
        $valorCaptado = $request->input('valorCaptado');
        $valorAprovado = $request->input('valorAprovado');
        $acessibilidade = $request->input('acessibilidade');
        $objetivos = $request->input('objetivos');
        $justificativa = $request->input('justificativa');
        $etapa = $request->input('etapa');
        $fichaTecnica = $request->input('fichaTecnica');
        $impactoAmbiental = $request->input('impactoAmbiental');
        $especificacaoTecnica = $request->input('especificacaoTecnica');
        $providencia = $request->input('providencia');
        $democratizacao = $request->input('democratizacao');
        $sinopse = $request->input('sinopse');
        $resumo = $request->input('resumo');
        $createdAt = date('d-m-Y H:i:s');
        $updatedAt = date('d-m-Y H:i:s');
        $valorProjeto = $request->input('valorProjeto');
        $outrasFontes = $request->input('outrasFontes');
        $valorProposta = $request->input('valorProposta');
        $valorSolicitado = $request->input('valorSolicitado');
        $objetivo = $request->input('objetivo');
        $estrategiaExecucao = $request->input('estrategiaExecucao');
        $linkIncentivadores = $request->input('linkIncentivadores');

        $createRouanetProjectUseCase = new CreateRouanetProjectUseCase($this->repository);
        $createRouanetProjectUseCase->__invoke(
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

        $getByNameRouanetProjectUseCase = new GetByNameRouanetProjectUseCase($this->repository);
        $newRouanetProject = $getByNameRouanetProjectUseCase->__invoke($nome);

        return $newRouanetProject;
    }
}
