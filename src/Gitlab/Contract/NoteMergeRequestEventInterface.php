<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\MergeRequest;
use App\Gitlab\Payload\Note;

interface NoteMergeRequestEventInterface extends NoteEventInterface
{
    public function getMergeRequest(): MergeRequest;

    public function getObjectAttributes(): Note;
}
