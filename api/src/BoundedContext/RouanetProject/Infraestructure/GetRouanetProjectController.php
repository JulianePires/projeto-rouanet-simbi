<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infraestructure;

use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\UseCases\GetRouanetProjectUseCase;

final class GetRouanetProjectController
{
    private $repository;

    public function __construct(EloquentRouanetProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $idProjeto = (int) $request->idProjeto;

        $getRouanetProjectUseCase = new GetRouanetProjectUseCase($this->repository);
        $rouanetProject = $getRouanetProjectUseCase->__invoke($idProjeto);

        return $rouanetProject;
    }

}
