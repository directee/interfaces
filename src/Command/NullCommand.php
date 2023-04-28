<?php
declare(strict_types=1);

namespace Directee\Interfaces\Command;

final readonly class NullCommand
{
    public function __construct(
        public string $name = '',
    ) { }
}
