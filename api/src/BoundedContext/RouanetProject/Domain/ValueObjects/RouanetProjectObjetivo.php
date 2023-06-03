<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectObjetivo
{
    private $value;

    /**
     * RouanetProjectObjetivo constructor.
     * @param string $objetivo
     * @throws InvalidArgumentException
     */
    public function __construct(string $objetivo)
    {
        $this->value = $objetivo;
    }

    public function value(): string
    {
        return $this->value;
    }
}
