<?php

namespace Directee\Interfaces\Command;

use Directee\Interfaces\Pass\Command;

final class NullCommand implements Command
{
    private string $name;

    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}
