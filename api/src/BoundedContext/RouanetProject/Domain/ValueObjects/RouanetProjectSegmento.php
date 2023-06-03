<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectSegmento
{
    private $value;

    /**
     * RouanetProjectSegmento constructor.
     * @param string $segmento
     * @throws InvalidArgumentException
     */
    public function __construct(string $segmento)
    {
        $this->value = $segmento;
    }

    public function value(): string
    {
        return $this->value;
    }
}
