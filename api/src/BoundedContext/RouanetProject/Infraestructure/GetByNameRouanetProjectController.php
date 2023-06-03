<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\Infrastructure\UseCases\GetByNameRouanetProjectUseCase;

final class GetByNameRouanetProjectController
{
    private $repository;

    public function __construct(EloquentRouanetProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $nome = $request->input('nome');

        $getByNameRouanetProjectUseCase = new GetByNameRouanetProjectUseCase($this->repository);
        $rouanetProject = $getByNameRouanetProjectUseCase->__invoke($nome);

        return $rouanetProject;
    }

}
