<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectAnoProjeto
{
    private $value;

    /**
     * RouanetProjectAnoProjeto constructor.
     * @param string $anoProjeto
     * @throws InvalidArgumentException
     */
    public function __construct(string $anoProjeto)
    {
        $this->value = $anoProjeto;
    }

    public function value(): string
    {
        return $this->value;
    }
}
