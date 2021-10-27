<?php

namespace App\Gitlab\Payload;

class Issue
{
    private int $authorId;
    private ?string $closedAt;
    private bool $confidential;
    private string $createdAt;
    private string $description;
    private $discussion_locked;
    private $due_date;
    private int $id;
    private $iid;
    private $last_edited_at;
    private $last_edited_by_id;
    private $milestone_id;
    private $moved_to_id;
    private $duplicated_to_id;
    private int $project_id;
    private $relative_position;
    private int $state_id;
    private int $time_estimate;
    private string $title;
    private string $updated_at;
    private int $updated_by_id;
    private string $url;
    private int $total_time_spent;
    private int $time_change;
    private $human_total_time_spent;
    private $human_time_change;
    private $human_time_estimate;
    private $assignee_ids = [];
    private $assignee_id;
    private $labels = [];
    private string $state;
    private string $severity;

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getClosedAt(): ?string
    {
        return $this->closedAt;
    }

    public function setClosedAt(?string $closedAt): void
    {
        $this->closedAt = $closedAt;
    }

    public function isConfidential(): bool
    {
        return $this->confidential;
    }

    public function setConfidential(bool $confidential): void
    {
        $this->confidential = $confidential;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDiscussionLocked()
    {
        return $this->discussion_locked;
    }

    public function setDiscussionLocked($discussion_locked): void
    {
        $this->discussion_locked = $discussion_locked;
    }

    public function getDueDate()
    {
        return $this->due_date;
    }

    public function setDueDate($due_date): void
    {
        $this->due_date = $due_date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIid()
    {
        return $this->iid;
    }

    public function setIid($iid): void
    {
        $this->iid = $iid;
    }

    public function getLastEditedAt()
    {
        return $this->last_edited_at;
    }

    public function setLastEditedAt($last_edited_at): void
    {
        $this->last_edited_at = $last_edited_at;
    }

    public function getLastEditedById()
    {
        return $this->last_edited_by_id;
    }

    public function setLastEditedById($last_edited_by_id): void
    {
        $this->last_edited_by_id = $last_edited_by_id;
    }

    public function getMilestoneId()
    {
        return $this->milestone_id;
    }

    public function setMilestoneId($milestone_id): void
    {
        $this->milestone_id = $milestone_id;
    }

    public function getMovedToId()
    {
        return $this->moved_to_id;
    }

    public function setMovedToId($moved_to_id): void
    {
        $this->moved_to_id = $moved_to_id;
    }

    public function getDuplicatedToId()
    {
        return $this->duplicated_to_id;
    }

    public function setDuplicatedToId($duplicated_to_id): void
    {
        $this->duplicated_to_id = $duplicated_to_id;
    }

    public function getProjectId(): int
    {
        return $this->project_id;
    }

    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    public function getRelativePosition()
    {
        return $this->relative_position;
    }

    public function setRelativePosition($relative_position): void
    {
        $this->relative_position = $relative_position;
    }

    public function getStateId(): int
    {
        return $this->state_id;
    }

    public function setStateId(int $state_id): void
    {
        $this->state_id = $state_id;
    }

    public function getTimeEstimate(): int
    {
        return $this->time_estimate;
    }

    public function setTimeEstimate(int $time_estimate): void
    {
        $this->time_estimate = $time_estimate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedById(): int
    {
        return $this->updated_by_id;
    }

    public function setUpdatedById(int $updated_by_id): void
    {
        $this->updated_by_id = $updated_by_id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getTotalTimeSpent(): int
    {
        return $this->total_time_spent;
    }

    public function setTotalTimeSpent(int $total_time_spent): void
    {
        $this->total_time_spent = $total_time_spent;
    }

    public function getTimeChange(): int
    {
        return $this->time_change;
    }

    public function setTimeChange(int $time_change): void
    {
        $this->time_change = $time_change;
    }

    public function getHumanTotalTimeSpent()
    {
        return $this->human_total_time_spent;
    }

    public function setHumanTotalTimeSpent($human_total_time_spent): void
    {
        $this->human_total_time_spent = $human_total_time_spent;
    }

    public function getHumanTimeChange()
    {
        return $this->human_time_change;
    }

    public function setHumanTimeChange($human_time_change): void
    {
        $this->human_time_change = $human_time_change;
    }

    public function getHumanTimeEstimate()
    {
        return $this->human_time_estimate;
    }

    public function setHumanTimeEstimate($human_time_estimate): void
    {
        $this->human_time_estimate = $human_time_estimate;
    }

    public function getAssigneeIds(): array
    {
        return $this->assignee_ids;
    }

    public function setAssigneeIds(array $assignee_ids): void
    {
        $this->assignee_ids = $assignee_ids;
    }

    public function getAssigneeId()
    {
        return $this->assignee_id;
    }

    public function setAssigneeId($assignee_id): void
    {
        $this->assignee_id = $assignee_id;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getSeverity(): string
    {
        return $this->severity;
    }

    public function setSeverity(string $severity): void
    {
        $this->severity = $severity;
    }
}
