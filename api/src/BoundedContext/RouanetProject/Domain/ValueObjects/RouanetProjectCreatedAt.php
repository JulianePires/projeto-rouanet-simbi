<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectCreatedAt
{
    private $value;

    /**
     * RouanetProjectCreatedAt constructor.
     * @param string $createdAt
     * @throws InvalidArgumentException
     */
    public function __construct(string $createdAt)
    {
        $this->value = $createdAt;
    }

    public function value(): string
    {
        return $this->value;
    }
}
