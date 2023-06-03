<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Infrastructure\UseCases;

use Src\BoundedContext\RouanetProject\Domain\Contracts\RouanetProjectRepositoryContract;

final class GetAllRouanetProjectUseCase
{
    private $repository;

    public function __construct(RouanetProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): array
    {
        $rouanetProject = $this->repository->findAll();

        return $rouanetProject;
    }

}
