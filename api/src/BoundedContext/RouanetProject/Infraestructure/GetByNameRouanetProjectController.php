<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infraestructure;

use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\UseCases\GetByNameRouanetProjectUseCase;

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
