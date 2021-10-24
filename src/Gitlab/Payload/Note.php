<?php

namespace App\Gitlab\Payload;

class Note
{
    private $attachment;
    private int $authorId;
    private $changePosition;
    private ?string $commitId;
    private string $createdAt;
    private string $discussionId;
    private int $id;
    private $lineCode;
    private string $note;
    private int $noteableId;
    private string $noteableType;
    private $originalPosition;
    private $position;
    private int $projectId;
    private ?string $resolvedAt;
    private $resolvedById;
    private $resolvedByPush;
    private $stDiff;
    private bool $system;
    private $type;
    private string $updatedAt;
    private $updatedById;
    private string $description;
    private string $url;

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($attachment): void
    {
        $this->attachment = $attachment;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getChangePosition()
    {
        return $this->changePosition;
    }

    public function setChangePosition($changePosition): void
    {
        $this->changePosition = $changePosition;
    }

    public function getCommitId(): ?string
    {
        return $this->commitId;
    }

    public function setCommitId(?string $commitId): void
    {
        $this->commitId = $commitId;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getDiscussionId(): string
    {
        return $this->discussionId;
    }

    public function setDiscussionId(string $discussionId): void
    {
        $this->discussionId = $discussionId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLineCode()
    {
        return $this->lineCode;
    }

    public function setLineCode($lineCode): void
    {
        $this->lineCode = $lineCode;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    public function getNoteableId(): int
    {
        return $this->noteableId;
    }

    public function setNoteableId(int $noteableId): void
    {
        $this->noteableId = $noteableId;
    }

    public function getNoteableType(): string
    {
        return $this->noteableType;
    }

    public function setNoteableType(string $noteableType): void
    {
        $this->noteableType = $noteableType;
    }

    public function getOriginalPosition()
    {
        return $this->originalPosition;
    }

    public function setOriginalPosition($originalPosition): void
    {
        $this->originalPosition = $originalPosition;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public function getProjectId(): int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    public function getResolvedAt(): ?string
    {
        return $this->resolvedAt;
    }

    public function setResolvedAt(?string $resolvedAt): void
    {
        $this->resolvedAt = $resolvedAt;
    }

    public function getResolvedById()
    {
        return $this->resolvedById;
    }

    public function setResolvedById($resolvedById): void
    {
        $this->resolvedById = $resolvedById;
    }

    public function getResolvedByPush()
    {
        return $this->resolvedByPush;
    }

    public function setResolvedByPush($resolvedByPush): void
    {
        $this->resolvedByPush = $resolvedByPush;
    }

    public function getStDiff()
    {
        return $this->stDiff;
    }

    public function setStDiff($stDiff): void
    {
        $this->stDiff = $stDiff;
    }

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): void
    {
        $this->system = $system;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedById()
    {
        return $this->updatedById;
    }

    public function setUpdatedById($updatedById): void
    {
        $this->updatedById = $updatedById;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
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
