<?php

namespace App\Gitlab\Payload;

class NoteEvent
{
    private string $objectKind;
    private string $eventType;

    private User $user;
    private int $projectId;
    private Project $project;

    private Repository $repository;
    private MergeRequest $mergeRequest;

    public function getObjectKind(): string
    {
        return $this->objectKind;
    }

    public function setObjectKind(string $objectKind): void
    {
        $this->objectKind = $objectKind;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): void
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

    public function getProjectId(): int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function setProject(Project $project): void
    {
        $this->project = $project;
    }

    public function getRepository(): Repository
    {
        return $this->repository;
    }

    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }

    public function getMergeRequest(): MergeRequest
    {
        return $this->mergeRequest;
    }

    public function setMergeRequest(MergeRequest $mergeRequest): void
    {
        $this->mergeRequest = $mergeRequest;
    }
}
