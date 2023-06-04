<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\UseCases;

use Src\BoundedContext\RouanetProject\Domain\Contracts\RouanetProjectRepositoryContract;
use Src\BoundedContext\RouanetProject\Domain\RouanetProject;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectNome;

final class GetByNameRouanetProjectUseCase
{
    private $repository;

    public function __construct(RouanetProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $rouanetProjectNome): ?RouanetProject
    {
        $nome = new RouanetProjectNome($rouanetProjectNome);

        $rouanetProject = $this->repository->findByName($nome);

        return $rouanetProject;
    }

}
