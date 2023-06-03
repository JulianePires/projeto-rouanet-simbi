<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectEtapa
{
    private $value;

    /**
     * RouanetProjectEtapa constructor.
     * @param string $etapa
     * @throws InvalidArgumentException
     */
    public function __construct(string $etapa)
    {
        $this->value = $etapa;
    }

    public function value(): string
    {
        return $this->value;
    }
}
