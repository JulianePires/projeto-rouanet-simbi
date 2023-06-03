<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infrastructure;

use Src\BoundedContext\RouanetProject\Infrastructure\Repositories\EloquentRouanetProjectRepository;
use Src\BoundedContext\RouanetProject\Infrastructure\UseCases\GetAllRouanetProjectUseCase;

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
