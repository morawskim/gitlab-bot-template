<?php

namespace App\Gitlab\Payload;

class MergeRequest
{
    private ?int $assigneeId;
    private int $authorId;
    private string $createdAt;
    private string $description;
    private ?int $headPipelineId;
    private int $id;
    private int $iid;
    private ?string $lastEditedAt;
    private ?string $lastEditedById;
    private $mergeCommitSha;
    private $mergeError;
    private MergeParams $mergeParams;
    private string $mergeStatus;
    private $mergeUserId;
    private $mergeWhenPipelineSucceeds;
    private $milestoneId;

    private string $sourceBranch;
    private int $sourceProjectId;
    private int $stateId;
    private string $targetBranch;
    private int $targetProjectId;
    private int $timeEstimate;
    private string $title;
    private string $updatedAt;
    private $updatedById;
    private string $url;
    private MergeRequestBranch $source;
    private MergeRequestBranch $target;
    private LastCommit $lastCommit;

    private bool $workInProgress;
    private int $totalTimeSpent;
    private int $timeChange;
    private $humanTotalTimeSpent;
    private $humanTimeChange;
    private $humanTimeEstimate;
    private $assigneeIds = [];
    private string $state;
    private string $action;

    public function getAssigneeId(): ?int
    {
        return $this->assigneeId;
    }

    public function setAssigneeId(?int $assigneeId): void
    {
        $this->assigneeId = $assigneeId;
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getHeadPipelineId(): ?int
    {
        return $this->headPipelineId;
    }

    public function setHeadPipelineId(?int $headPipelineId): void
    {
        $this->headPipelineId = $headPipelineId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIid(): int
    {
        return $this->iid;
    }

    public function setIid(int $iid): void
    {
        $this->iid = $iid;
    }

    public function getLastEditedAt(): ?string
    {
        return $this->lastEditedAt;
    }

    public function setLastEditedAt(?string $lastEditedAt): void
    {
        $this->lastEditedAt = $lastEditedAt;
    }

    public function getLastEditedById(): ?string
    {
        return $this->lastEditedById;
    }

    public function setLastEditedById(?string $lastEditedById): void
    {
        $this->lastEditedById = $lastEditedById;
    }

    public function getMergeCommitSha()
    {
        return $this->mergeCommitSha;
    }

    public function setMergeCommitSha($mergeCommitSha): void
    {
        $this->mergeCommitSha = $mergeCommitSha;
    }

    public function getMergeError()
    {
        return $this->mergeError;
    }

    public function setMergeError($mergeError): void
    {
        $this->mergeError = $mergeError;
    }

    public function getMergeParams(): MergeParams
    {
        return $this->mergeParams;
    }

    public function setMergeParams(MergeParams $mergeParams): void
    {
        $this->mergeParams = $mergeParams;
    }

    public function getMergeStatus(): string
    {
        return $this->mergeStatus;
    }

    public function setMergeStatus(string $mergeStatus): void
    {
        $this->mergeStatus = $mergeStatus;
    }

    public function getMergeUserId()
    {
        return $this->mergeUserId;
    }

    public function setMergeUserId($mergeUserId): void
    {
        $this->mergeUserId = $mergeUserId;
    }

    public function getMergeWhenPipelineSucceeds()
    {
        return $this->mergeWhenPipelineSucceeds;
    }

    public function setMergeWhenPipelineSucceeds($mergeWhenPipelineSucceeds): void
    {
        $this->mergeWhenPipelineSucceeds = $mergeWhenPipelineSucceeds;
    }

    public function getMilestoneId()
    {
        return $this->milestoneId;
    }

    public function setMilestoneId($milestoneId): void
    {
        $this->milestoneId = $milestoneId;
    }

    public function getSourceBranch(): string
    {
        return $this->sourceBranch;
    }

    public function setSourceBranch(string $sourceBranch): void
    {
        $this->sourceBranch = $sourceBranch;
    }

    public function getSourceProjectId(): int
    {
        return $this->sourceProjectId;
    }

    public function setSourceProjectId(int $sourceProjectId): void
    {
        $this->sourceProjectId = $sourceProjectId;
    }

    public function getStateId(): int
    {
        return $this->stateId;
    }

    public function setStateId(int $stateId): void
    {
        $this->stateId = $stateId;
    }

    public function getTargetBranch(): string
    {
        return $this->targetBranch;
    }

    public function setTargetBranch(string $targetBranch): void
    {
        $this->targetBranch = $targetBranch;
    }

    public function getTargetProjectId(): int
    {
        return $this->targetProjectId;
    }

    public function setTargetProjectId(int $targetProjectId): void
    {
        $this->targetProjectId = $targetProjectId;
    }

    public function getTimeEstimate(): int
    {
        return $this->timeEstimate;
    }

    public function setTimeEstimate(int $timeEstimate): void
    {
        $this->timeEstimate = $timeEstimate;
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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getSource(): MergeRequestBranch
    {
        return $this->source;
    }

    public function setSource(MergeRequestBranch $source): void
    {
        $this->source = $source;
    }

    public function getTarget(): MergeRequestBranch
    {
        return $this->target;
    }

    public function setTarget(MergeRequestBranch $target): void
    {
        $this->target = $target;
    }

    public function getLastCommit(): LastCommit
    {
        return $this->lastCommit;
    }

    public function setLastCommit(LastCommit $lastCommit): void
    {
        $this->lastCommit = $lastCommit;
    }

    public function isWorkInProgress(): bool
    {
        return $this->workInProgress;
    }

    public function setWorkInProgress(bool $workInProgress): void
    {
        $this->workInProgress = $workInProgress;
    }

    public function getTotalTimeSpent(): int
    {
        return $this->totalTimeSpent;
    }

    public function setTotalTimeSpent(int $totalTimeSpent): void
    {
        $this->totalTimeSpent = $totalTimeSpent;
    }

    public function getTimeChange(): int
    {
        return $this->timeChange;
    }

    public function setTimeChange(int $timeChange): void
    {
        $this->timeChange = $timeChange;
    }

    public function getHumanTotalTimeSpent()
    {
        return $this->humanTotalTimeSpent;
    }

    public function setHumanTotalTimeSpent($humanTotalTimeSpent): void
    {
        $this->humanTotalTimeSpent = $humanTotalTimeSpent;
    }

    public function getHumanTimeChange()
    {
        return $this->humanTimeChange;
    }

    public function setHumanTimeChange($humanTimeChange): void
    {
        $this->humanTimeChange = $humanTimeChange;
    }

    public function getHumanTimeEstimate()
    {
        return $this->humanTimeEstimate;
    }

    public function setHumanTimeEstimate($humanTimeEstimate): void
    {
        $this->humanTimeEstimate = $humanTimeEstimate;
    }

    public function getAssigneeIds(): array
    {
        return $this->assigneeIds;
    }

    public function setAssigneeIds(array $assigneeIds): void
    {
        $this->assigneeIds = $assigneeIds;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }
}
