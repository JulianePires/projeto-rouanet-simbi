<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectNome
{
    private $value;

    /**
     * RouanetProjectNome constructor.
     * @param string $nome
     * @throws InvalidArgumentException
     */
    public function __construct(string $nome)
    {
        $this->value = $nome;
    }

    public function value(): string
    {
        return $this->value;
    }
}
