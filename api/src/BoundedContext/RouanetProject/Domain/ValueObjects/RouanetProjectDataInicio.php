<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectDataInicio
{
    private $value;

    /**
     * RouanetProjectDataInicio constructor.
     * @param string $dataInicio
     * @throws InvalidArgumentException
     */
    public function __construct(string $dataInicio)
    {
        $this->value = $dataInicio;
    }

    public function value(): string
    {
        return $this->value;
    }
}
