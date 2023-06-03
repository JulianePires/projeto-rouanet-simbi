<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectPronac
{
    private $value;

    /**
     * RouanetProjectPronac constructor.
     * @param string $pronac
     * @throws InvalidArgumentException
     */
    public function __construct(string $pronac)
    {
        $this->value = $pronac;
    }

    public function value(): string
    {
        return $this->value;
    }
}
