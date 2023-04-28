<?php

namespace Directee\Interfaces\Pass;

interface CommandHandler
{
    public function handle(object $command): void;
}
