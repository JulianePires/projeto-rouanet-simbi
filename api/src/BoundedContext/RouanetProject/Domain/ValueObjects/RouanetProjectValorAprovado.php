<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectValorAprovado
{
    private $value;

    /**
     * RouanetProjectValorAprovado constructor.
     * @param string $valorAprovado
     * @throws InvalidArgumentException
     */
    public function __construct(string $valorAprovado)
    {
        $this->value = $valorAprovado;
    }

    public function value(): string
    {
        return $this->value;
    }
}
