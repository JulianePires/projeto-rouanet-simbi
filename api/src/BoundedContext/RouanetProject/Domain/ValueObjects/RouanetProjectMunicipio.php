<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectMunicipio
{
    private $value;

    /**
     * RouanetProjectMunicipio constructor.
     * @param string $municipio
     * @throws InvalidArgumentException
     */
    public function __construct(string $municipio)
    {
        $this->value = $municipio;
    }

    public function value(): string
    {
        return $this->value;
    }
}
