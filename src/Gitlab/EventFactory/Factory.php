<?php

namespace App\Gitlab\EventFactory;

use App\Gitlab\GitlabEvent;
use RuntimeException;

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

    public function create(string $eventName, array $data): GitlabEvent
    {
        foreach ($this->events as $event) {
            if ($event->isSupported($eventName)) {
                return $event->create($data);
            }
        }

        throw new RuntimeException(sprintf('Event "%s" is not supported', $eventName));
    }
}
