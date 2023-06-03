<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectFichaTecnica
{
    private $value;

    /**
     * RouanetProjectFichaTecnica constructor.
     * @param string $fichaTecnica
     * @throws InvalidArgumentException
     */
    public function __construct(string $fichaTecnica)
    {
        $this->value = $fichaTecnica;
    }

    public function value(): string
    {
        return $this->value;
    }
}
