<?php

namespace Directee\Interfaces\Pass;

interface CommandBus
{
    public function addHandler(string $command, string $handler): void;
    public function handle(object $command): void;
}
