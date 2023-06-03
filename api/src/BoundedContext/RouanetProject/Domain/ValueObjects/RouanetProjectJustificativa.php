<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectJustificativa
{
    private $value;

    /**
     * RouanetProjectJustificativa constructor.
     * @param string $justificativa
     * @throws InvalidArgumentException
     */
    public function __construct(string $justificativa)
    {
        $this->value = $justificativa;
    }

    public function value(): string
    {
        return $this->value;
    }
}
