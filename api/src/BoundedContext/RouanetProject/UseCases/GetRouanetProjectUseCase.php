<?php

declare(strict_types=1);

use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectId;
use Src\BoundedContext\RouanetProject\Domain\RouanetProject;

final class GetRouanetProjectUseCase
{
    private $repository;

    public function __construct(RouanetProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $rouanetProjectIdProjeto): ?RouanetProject
    {
        $idProjeto = new RouanetProjectId($rouanetProjectIdProjeto);

        $rouanetProject = $this->repository->find($idProjeto);

        return $rouanetProject;
    }

}
