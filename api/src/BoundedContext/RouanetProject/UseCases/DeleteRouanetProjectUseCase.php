<?php

declare(strict_types=1);

use src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectId;

final class DeleteRouanetProjectUseCase
{
    private $repository;

    public function __construct(RouanetProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $rouanetProjectIdProjeto): void
    {
        $idProjeto = new RouanetProjectId($rouanetProjectIdProjeto);

        $this->repository->delete($idProjeto);
    }

}
