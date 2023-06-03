<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectDataTermino
{
    private $value;

    /**
     * RouanetProjectDataTermino constructor.
     * @param string $dataTermino
     * @throws InvalidArgumentException
     */
    public function __construct(string $dataTermino)
    {
        $this->value = $dataTermino;
    }

    public function value(): string
    {
        return $this->value;
    }
}
