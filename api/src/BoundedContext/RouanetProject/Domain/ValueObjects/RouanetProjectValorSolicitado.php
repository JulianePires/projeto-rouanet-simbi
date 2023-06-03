<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectValorSolicitado
{
    private $value;

    /**
     * RouanetProjectValorSolicitado constructor.
     * @param string $valorSolicitado
     * @throws InvalidArgumentException
     */
    public function __construct(string $valorSolicitado)
    {
        $this->value = $valorSolicitado;
    }

    public function value(): string
    {
        return $this->value;
    }
}
