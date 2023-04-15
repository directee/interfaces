<?php

namespace Directee\Interfaces\Pass;

interface EventHandler
{
    public function handle(Event $event): void;
}
