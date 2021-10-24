<?php

namespace App\Gitlab\Exception;

use InvalidArgumentException;

class UnsupportedWebhookEvent extends InvalidArgumentException
{
    public static function createUnsupportedEvent(string $eventName): self
    {
        return new self(sprintf('Unsupported event "%s"', $eventName));
    }
}
