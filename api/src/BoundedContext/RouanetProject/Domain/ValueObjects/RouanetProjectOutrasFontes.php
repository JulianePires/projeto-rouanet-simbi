<?php

declare(strict_types=1);

namespace Src\BoundedContext\RouanetProject\Domain\ValueObjects;

use InvalidArgumentException;

final class RouanetProjectOutrasFontes
{
    private $value;

    /**
     * RouanetProjectOutrasFontes constructor.
     * @param string $outrasFontes
     * @throws InvalidArgumentException
     */
    public function __construct(string $outrasFontes)
    {
        $this->value = $outrasFontes;
    }

    public function value(): string
    {
        return $this->value;
    }
}
