<?php

namespace App\Gitlab\EventFactory;

use App\Gitlab\Contract\GitlabEvent;
use App\Gitlab\Payload\NoteEvent;
use Jane\Component\AutoMapper\AutoMapperInterface;

class NoteEventFactory implements EventFactoryInterface
{
    private AutoMapperInterface $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function isSupported(string $eventName): bool
    {
        return 'Note Hook' === $eventName;
    }

    public function create(array $data): GitlabEvent
    {
        $data['noteTypeEvent'] = $data['objectAttributes']['noteableType'] ?? '';

        return $this->autoMapper->map($data, NoteEvent::class);
    }
}
