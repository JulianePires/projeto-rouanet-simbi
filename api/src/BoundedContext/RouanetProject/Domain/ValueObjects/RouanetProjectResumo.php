<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectResumo
{
    private $value;

    /**
     * RouanetProjectResumo constructor.
     * @param string $resumo
     * @throws InvalidArgumentException
     */
    public function __construct(string $resumo)
    {
        $this->value = $resumo;
    }

    public function value(): string
    {
        return $this->value;
    }
}
