<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectImpactoAmbiental
{
    private $value;

    /**
     * RouanetProjectImpactoAmbiental constructor.
     * @param string $impactoAmbiental
     * @throws InvalidArgumentException
     */
    public function __construct(string $impactoAmbiental)
    {
        $this->value = $impactoAmbiental;
    }

    public function value(): string
    {
        return $this->value;
    }
}
