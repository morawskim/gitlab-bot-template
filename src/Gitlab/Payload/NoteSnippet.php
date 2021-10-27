<?php

namespace App\Gitlab\Payload;

class NoteSnippet
{
    private $attachment;
    private int $author_id;
    private $change_position;
    private ?string $commit_id;
    private string $created_at;
    private string $discussion_id;
    private int $id;
    private $line_code;
    private string $note;
    private int $noteable_id;
    private string $noteable_type;
    private $original_position;
    private $position;
    private int $project_id;
    private ?string $resolved_at;
    private $resolved_by_id;
    private $resolved_by_push;
    private $st_diff;
    private bool $system;
    private $type;
    private string $updated_at;
    private $updated_by_id;
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
        return $this->author_id;
    }

    public function setAuthorId(int $author_id): void
    {
        $this->author_id = $author_id;
    }

    public function getChangePosition()
    {
        return $this->change_position;
    }

    public function setChangePosition($change_position): void
    {
        $this->change_position = $change_position;
    }

    public function getCommitId(): ?string
    {
        return $this->commit_id;
    }

    public function setCommitId(?string $commit_id): void
    {
        $this->commit_id = $commit_id;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getDiscussionId(): string
    {
        return $this->discussion_id;
    }

    public function setDiscussionId(string $discussion_id): void
    {
        $this->discussion_id = $discussion_id;
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
        return $this->line_code;
    }

    public function setLineCode($line_code): void
    {
        $this->line_code = $line_code;
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
        return $this->noteable_id;
    }

    public function setNoteableId(int $noteable_id): void
    {
        $this->noteable_id = $noteable_id;
    }

    public function getNoteableType(): string
    {
        return $this->noteable_type;
    }

    public function setNoteableType(string $noteable_type): void
    {
        $this->noteable_type = $noteable_type;
    }

    public function getOriginalPosition()
    {
        return $this->original_position;
    }

    public function setOriginalPosition($original_position): void
    {
        $this->original_position = $original_position;
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
        return $this->project_id;
    }

    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    public function getResolvedAt(): ?string
    {
        return $this->resolved_at;
    }

    public function setResolvedAt(?string $resolved_at): void
    {
        $this->resolved_at = $resolved_at;
    }

    public function getResolvedById()
    {
        return $this->resolved_by_id;
    }

    public function setResolvedById($resolved_by_id): void
    {
        $this->resolved_by_id = $resolved_by_id;
    }

    public function getResolvedByPush()
    {
        return $this->resolved_by_push;
    }

    public function setResolvedByPush($resolved_by_push): void
    {
        $this->resolved_by_push = $resolved_by_push;
    }

    public function getStDiff()
    {
        return $this->st_diff;
    }

    public function setStDiff($st_diff): void
    {
        $this->st_diff = $st_diff;
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
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedById()
    {
        return $this->updated_by_id;
    }

    public function setUpdatedById($updated_by_id): void
    {
        $this->updated_by_id = $updated_by_id;
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
