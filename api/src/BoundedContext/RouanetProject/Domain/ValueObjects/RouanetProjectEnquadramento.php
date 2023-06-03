<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectEnquadramento
{
    private $value;

    /**
     * RouanetProjectEnquadramento constructor.
     * @param string $enquadramento
     * @throws InvalidArgumentException
     */
    public function __construct(string $enquadramento)
    {
        $this->value = $enquadramento;
    }

    public function value(): string
    {
        return $this->value;
    }
}
