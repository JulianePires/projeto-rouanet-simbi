<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectSinopse
{
    private $value;

    /**
     * RouanetProjectSinopse constructor.
     * @param string $sinopse
     * @throws InvalidArgumentException
     */
    public function __construct(string $sinopse)
    {
        $this->value = $sinopse;
    }

    public function value(): string
    {
        return $this->value;
    }
}
