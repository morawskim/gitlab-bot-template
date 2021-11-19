<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\Project;
use App\Gitlab\Payload\Repository;
use App\Gitlab\Payload\User;

interface NoteEventInterface extends GitlabEvent
{
    public function getObjectKind(): string;

    public function getEventType(): string;

    public function getUser(): User;

    public function getProjectId(): int;

    public function getProject(): Project;

    public function getRepository(): Repository;
}
