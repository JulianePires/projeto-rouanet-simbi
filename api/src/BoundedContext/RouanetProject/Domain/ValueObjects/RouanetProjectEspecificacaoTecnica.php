<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectEspecificacaoTecnica
{
    private $value;

    /**
     * RouanetProjectEspecificacaoTecnica constructor.
     * @param string $especificacaoTecnica
     * @throws InvalidArgumentException
     */
    public function __construct(string $especificacaoTecnica)
    {
        $this->value = $especificacaoTecnica;
    }

    public function value(): string
    {
        return $this->value;
    }
}
