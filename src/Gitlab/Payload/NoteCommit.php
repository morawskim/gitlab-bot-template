<?php

namespace App\Gitlab\Payload;

class NoteCommit
{
    private int $id;
    private string $note;
    private string $noteableType;
    private int $authorId;
    private string $createdAt;
    private string $updatedAt;
    private int $projectId;
    private $attachment;
    private string $lineCode;
    private string $commitId;
    private $noteableId;
    private bool $system;
    private Diff $stDiff;
    private string $url;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    public function getNoteableType(): string
    {
        return $this->noteableType;
    }

    public function setNoteableType(string $noteableType): void
    {
        $this->noteableType = $noteableType;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getProjectId(): int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($attachment): void
    {
        $this->attachment = $attachment;
    }

    public function getLineCode(): string
    {
        return $this->lineCode;
    }

    public function setLineCode(string $lineCode): void
    {
        $this->lineCode = $lineCode;
    }

    public function getCommitId(): string
    {
        return $this->commitId;
    }

    public function setCommitId(string $commitId): void
    {
        $this->commitId = $commitId;
    }

    public function getNoteableId()
    {
        return $this->noteableId;
    }

    public function setNoteableId($noteableId): void
    {
        $this->noteableId = $noteableId;
    }

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): void
    {
        $this->system = $system;
    }

    public function getStDiff(): Diff
    {
        return $this->stDiff;
    }

    public function setStDiff(Diff $stDiff): void
    {
        $this->stDiff = $stDiff;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
