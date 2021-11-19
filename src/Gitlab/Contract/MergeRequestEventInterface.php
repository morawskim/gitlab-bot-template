<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\Changes;
use App\Gitlab\Payload\MergeRequest;
use App\Gitlab\Payload\Project;
use App\Gitlab\Payload\Repository;
use App\Gitlab\Payload\User;

interface MergeRequestEventInterface extends GitlabEvent
{
    public function getObjectKind();

    public function getEventType();

    public function getUser(): User;

    public function getProject(): Project;

    public function getObjectAttributes(): MergeRequest;

    public function getLabels(): array;

    public function getChanges(): Changes;

    public function getRepository(): Repository;
}
