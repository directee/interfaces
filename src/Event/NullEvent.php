<?php

namespace Directee\Interfaces\Event;

use Directee\Interfaces\Pass\Event;

final class NullEvent implements Event
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
