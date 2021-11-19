<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\MergeRequestEventInterface;
use App\Gitlab\Contract\GitlabEvent;

class MergeRequestEvent implements MergeRequestEventInterface
{
    private $objectKind;
    private $eventType;

    private User $user;
    private Project $project;

    private MergeRequest $objectAttributes;
    private $labels = [];
    private Changes $changes;
    private Repository $repository;

    public function getObjectKind()
    {
        return $this->objectKind;
    }

    public function setObjectKind($objectKind): void
    {
        $this->objectKind = $objectKind;
    }

    public function getEventType()
    {
        return $this->eventType;
    }

    public function setEventType($eventType): void
    {
        $this->eventType = $eventType;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function setProject(Project $project): void
    {
        $this->project = $project;
    }

    public function getObjectAttributes(): MergeRequest
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(MergeRequest $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    public function getChanges(): Changes
    {
        return $this->changes;
    }

    public function setChanges(Changes $changes): void
    {
        $this->changes = $changes;
    }

    public function getRepository(): Repository
    {
        return $this->repository;
    }

    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }
}
