<?php

namespace Directee\Interfaces\Pass;

interface CommandHandler
{
    public function handle(Command $command): void;
}
