<?php

namespace Directee\Interfaces\Pass;

interface CommandBus
{
    public function handle(Command $command): void;
}
