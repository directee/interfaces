<?php

namespace Directee\Interfaces\Pass;

interface EventHandler
{
    public function handle(object $event): void;
}
