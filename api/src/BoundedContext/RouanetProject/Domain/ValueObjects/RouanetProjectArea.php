<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectArea
{
    private $value;

    /**
     * RouanetProjectArea constructor.
     * @param string $area
     * @throws InvalidArgumentException
     */
    public function __construct(string $area)
    {
        $this->value = $area;
    }

    public function value(): string
    {
        return $this->value;
    }
}
