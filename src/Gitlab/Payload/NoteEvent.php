<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\NoteEventInterface;
use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 *  @DiscriminatorMap(typeProperty="noteTypeEvent", mapping={
 *    "MergeRequest"="App\Gitlab\Payload\NoteMergeRequestEvent",
 *    "Commit"="App\Gitlab\Payload\NoteCommitEvent",
 *    "Issue"="App\Gitlab\Payload\NoteIssueEvent",
 *    "Snippet"="App\Gitlab\Payload\NoteSnippetEvent",
 * })
 */
abstract class NoteEvent implements NoteEventInterface
{
    private string $objectKind;
    private string $eventType;

    private User $user;
    private int $projectId;
    private Project $project;

    private Repository $repository;

    public string $noteTypeEvent;

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
}
