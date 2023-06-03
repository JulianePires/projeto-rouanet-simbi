<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectSituacao
{
    private $value;

    /**
     * RouanetProjectSituacao constructor.
     * @param string $situacao
     * @throws InvalidArgumentException
     */
    public function __construct(string $situacao)
    {
        $this->value = $situacao;
    }

    public function value(): string
    {
        return $this->value;
    }
}
