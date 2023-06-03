<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectUpdatedAt
{
    private $value;

    /**
     * RouanetProjectUpdatedAt constructor.
     * @param string $updatedAt
     * @throws InvalidArgumentException
     */
    public function __construct(string $updatedAt)
    {
        $this->value = $updatedAt;
    }

    public function value(): string
    {
        return $this->value;
    }
}
