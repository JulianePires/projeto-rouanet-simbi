<?php

declare(strict_types=1);

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
