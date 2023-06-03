<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectAcessibilidade
{
    private $value;

    /**
     * RouanetProjectAcessibilidade constructor.
     * @param string $acessibilidade
     * @throws InvalidArgumentException
     */
    public function __construct(string $acessibilidade)
    {
        $this->value = $acessibilidade;
    }

    public function value(): string
    {
        return $this->value;
    }
}
