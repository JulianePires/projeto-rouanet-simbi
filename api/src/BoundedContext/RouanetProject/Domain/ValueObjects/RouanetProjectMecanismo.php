<?php

declare(strict_types=1);

namespace src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectMecanismo
{
    private $value;

    /**
     * RouanetProjectMecanismo constructor.
     * @param string $mecanismo
     * @throws InvalidArgumentException
     */
    public function __construct(string $mecanismo)
    {
        $this->value = $mecanismo;
    }

    public function value(): string
    {
        return $this->value;
    }
}
