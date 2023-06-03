<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectDemocratizacao
{
    private $value;

    /**
     * RouanetProjectDemocratizacao constructor.
     * @param string $democratizacao
     * @throws InvalidArgumentException
     */
    public function __construct(string $democratizacao)
    {
        $this->value = $democratizacao;
    }

    public function value(): string
    {
        return $this->value;
    }
}
