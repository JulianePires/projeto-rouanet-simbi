<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectValorProjeto
{
    private $value;

    /**
     * RouanetProjectValorProjeto constructor.
     * @param string $valorProjeto
     * @throws InvalidArgumentException
     */
    public function __construct(string $valorProjeto)
    {
        $this->value = $valorProjeto;
    }

    public function value(): string
    {
        return $this->value;
    }
}
