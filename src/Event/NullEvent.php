<?php

namespace Directee\Interfaces\Event;

final readonly class NullEvent
{
    public function __construct(
        public string $name = '',
    ) { }
}
