<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infraestructure;

use Src\BoundedContext\RouanetProject\Infraestructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\UseCases\GetAllRouanetProjectUseCase;

final class GetAllRouanetProjectController
{
    private $repository;

    public function __construct(EloquentRouanetProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $getAllRouanetProjectUseCase = new GetAllRouanetProjectUseCase($this->repository);
        $rouanetProjects = $getAllRouanetProjectUseCase->__invoke();

        return $rouanetProjects;
    }

}
