<?php

namespace App\Gitlab\AutoMapper;

use App\Gitlab\Exception\UnsupportedNoteType;
use App\Gitlab\Payload\Note;
use App\Gitlab\Payload\NoteCommit;
use App\Gitlab\Payload\NoteEvent;
use App\Gitlab\Payload\NoteIssue;
use App\Gitlab\Payload\NoteSnippet;
use Jane\Bundle\AutoMapperBundle\Configuration\MapperConfigurationInterface;
use Jane\Component\AutoMapper\AutoMapperInterface;
use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;

class NoteMapperConfiguration implements MapperConfigurationInterface
{
    private AutoMapperInterface $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function process(MapperGeneratorMetadataInterface $metadata): void
    {
        $metadata->forMember('objectAttributes', function (array $noteEvent) {
            $objectAttributes = $noteEvent['objectAttributes'] ?? [];
            $noteableType = $objectAttributes['noteableType'] ?? null;

            if ('MergeRequest' === $noteableType) {
                return $this->autoMapper->map($objectAttributes, Note::class);
            }

            if ('Commit' === $noteableType) {
                return $this->autoMapper->map($objectAttributes, NoteCommit::class);
            }

            if ('Issue' === $noteableType) {
                return $this->autoMapper->map($objectAttributes, NoteIssue::class);
            }

            if ('Snippet' === $noteableType) {
                return $this->autoMapper->map($objectAttributes, NoteSnippet::class);
            }

            throw UnsupportedNoteType::unsupportedNote($noteableType);
        });
    }

    public function getSource(): string
    {
        return 'array';
    }

    public function getTarget(): string
    {
        return NoteEvent::class;
    }
}
