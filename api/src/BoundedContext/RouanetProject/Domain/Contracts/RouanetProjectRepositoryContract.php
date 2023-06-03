<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\Contracts;

use Src\BoundedContext\RouanetProject\Domain\RouanetProject;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectId;
use Src\BoundedContext\RouanetProject\Domain\ValueObjects\RouanetProjectNome;

interface RouanetProjectRepositoryContract
{
    public function find(RouanetProjectId $id): ?RouanetProject;
    public function findByName(RouanetProjectNome $nome): ?RouanetProject;
    public function findAll(): array;
    public function save(RouanetProject $rouanetProject): void;
    public function update(RouanetProjectId $id, RouanetProject $rouanetProject): void;
    public function delete(RouanetProjectId $id): void;
}
