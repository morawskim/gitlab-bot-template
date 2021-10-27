<?php

namespace App\Gitlab\Payload;

use App\Gitlab\GitlabEvent;

class NoteEvent implements GitlabEvent
{
    private string $objectKind;
    private string $eventType;

    private User $user;
    private int $projectId;
    private Project $project;

    private Note|NoteCommit|NoteIssue|NoteSnippet $objectAttributes;

    private Repository $repository;

    // todo mmo depends on note type
    private MergeRequest $mergeRequest;
    private LastCommit $commit;
    private Issue $issue;
    private Snippet $snippet;

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

    public function getObjectAttributes(): Note|NoteCommit|NoteIssue|NoteSnippet
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(Note|NoteCommit|NoteIssue|NoteSnippet $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
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

    public function getCommit(): LastCommit
    {
        return $this->commit;
    }

    public function setCommit(LastCommit $commit): void
    {
        $this->commit = $commit;
    }

    public function getIssue(): Issue
    {
        return $this->issue;
    }

    public function setIssue(Issue $issue): void
    {
        $this->issue = $issue;
    }

    public function getSnippet(): Snippet
    {
        return $this->snippet;
    }

    public function setSnippet(Snippet $snippet): void
    {
        $this->snippet = $snippet;
    }
}
