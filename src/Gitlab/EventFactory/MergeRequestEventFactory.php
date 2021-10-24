<?php

namespace App\Gitlab\EventFactory;

use App\Gitlab\GitlabEvent;
use App\Gitlab\Payload\MergeRequestEvent;
use Jane\Component\AutoMapper\AutoMapperInterface;

class MergeRequestEventFactory implements EventFactoryInterface
{
    private AutoMapperInterface $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function isSupported(string $eventName): bool
    {
        return 'Merge Request Hook' === $eventName;
    }

    public function create(array $data): GitlabEvent
    {
        return $this->autoMapper->map($data, MergeRequestEvent::class);
    }
}
