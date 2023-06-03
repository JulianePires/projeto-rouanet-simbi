<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectObjetivos
{
    private $value;

    /**
     * RouanetProjectObjetivos constructor.
     * @param string $objetivos
     * @throws InvalidArgumentException
     */
    public function __construct(string $objetivos)
    {
        $this->value = $objetivos;
    }

    public function value(): string
    {
        return $this->value;
    }
}
