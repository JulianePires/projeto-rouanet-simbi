<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectValorCaptado
{
    private $value;

    /**
     * RouanetProjectValorCaptado constructor.
     * @param string $valorCaptado
     * @throws InvalidArgumentException
     */
    public function __construct(string $valorCaptado)
    {
        $this->value = $valorCaptado;
    }

    public function value(): string
    {
        return $this->value;
    }
}
