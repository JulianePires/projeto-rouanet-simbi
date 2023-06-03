<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectLinkIncentivadores
{
    private $value;

    /**
     * RouanetProjectLinkIncentivadores constructor.
     * @param string $linkIncentivadores
     * @throws InvalidArgumentException
     */
    public function __construct(string $linkIncentivadores)
    {
        $this->value = $linkIncentivadores;
    }

    public function value(): string
    {
        return $this->value;
    }
}
