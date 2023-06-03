<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectValorProposta
{
    private $value;

    /**
     * RouanetProjectValorProposta constructor.
     * @param string $valorProposta
     * @throws InvalidArgumentException
     */
    public function __construct(string $valorProposta)
    {
        $this->value = $valorProposta;
    }

    public function value(): string
    {
        return $this->value;
    }
}
