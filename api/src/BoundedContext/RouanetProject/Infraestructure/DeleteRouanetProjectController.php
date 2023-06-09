<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infraestructure;

use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\UseCases\DeleteRouanetProjectUseCase;

final class DeleteRouanetProjectController
{
    private $repository;

    public function __construct(EloquentRouanetProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $idProjeto = (int) $request->idProjeto;

        $deleteRouanetProjectUseCase = new DeleteRouanetProjectUseCase($this->repository);
        $deleteRouanetProjectUseCase->__invoke($idProjeto);
    }

}
