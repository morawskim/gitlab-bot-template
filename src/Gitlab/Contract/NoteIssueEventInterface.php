<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\Issue;
use App\Gitlab\Payload\NoteIssue;

interface NoteIssueEventInterface extends NoteEventInterface
{
    public function getIssue(): Issue;

    public function getObjectAttributes(): NoteIssue;
}
