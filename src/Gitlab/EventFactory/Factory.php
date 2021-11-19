<?php

namespace App\Gitlab\EventFactory;

use App\Gitlab\Exception\UnsupportedWebhookEvent;
use App\Gitlab\Contract\GitlabEvent;

class Factory
{
    private iterable $events;

    /**
     * @param iterable<EventFactoryInterface> $events
     */
    public function __construct(iterable $events)
    {
        $this->events = $events;
    }

    /**
     * @throws UnsupportedWebhookEvent
     */
    public function create(string $eventName, array $data): GitlabEvent
    {
        foreach ($this->events as $event) {
            if ($event->isSupported($eventName)) {
                return $event->create($data);
            }
        }

        throw UnsupportedWebhookEvent::createUnsupportedEvent($eventName);
    }
}
