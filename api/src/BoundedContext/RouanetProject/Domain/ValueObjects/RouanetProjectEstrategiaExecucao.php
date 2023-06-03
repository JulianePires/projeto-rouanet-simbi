<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectEstrategiaExecucao
{
    private $value;

    /**
     * RouanetProjectEstrategiaExecucao constructor.
     * @param string $estrategiaExecucao
     * @throws InvalidArgumentException
     */
    public function __construct(string $estrategiaExecucao)
    {
        $this->value = $estrategiaExecucao;
    }

    public function value(): string
    {
        return $this->value;
    }
}
