<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectProvidencia
{
    private $value;

    /**
     * RouanetProjectProvidencia constructor.
     * @param string $providencia
     * @throws InvalidArgumentException
     */
    public function __construct(string $providencia)
    {
        $this->value = $providencia;
    }

    public function value(): string
    {
        return $this->value;
    }
}
