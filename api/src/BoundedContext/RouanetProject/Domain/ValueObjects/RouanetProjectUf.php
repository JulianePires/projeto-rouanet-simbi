<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectUf
{
    private $value;

    /**
     * RouanetProjectUf constructor.
     * @param string $uf
     * @throws InvalidArgumentException
     */
    public function __construct(string $uf)
    {
        $this->value = $uf;
    }

    public function value(): string
    {
        return $this->value;
    }
}
