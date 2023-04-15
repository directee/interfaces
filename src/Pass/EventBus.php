<?php

namespace Directee\Interfaces\Pass;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventBus extends EventDispatcherInterface
{
    public const PRIORITY_HIGH = 100;
    public const PRIORITY_NORMAL = 0;
    public const PRIORITY_LOW = -100;

    public function subscribeTo(string $eventIdentifier, $listener, int $priority = self::PRIORITY_NORMAL): void;
    public function dispatch(Event $event): Event;
}
