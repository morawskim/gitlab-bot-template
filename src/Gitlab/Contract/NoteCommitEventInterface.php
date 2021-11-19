<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\LastCommit;
use App\Gitlab\Payload\NoteCommit;

interface NoteCommitEventInterface extends NoteEventInterface
{
    public function getCommit(): LastCommit;

    public function getObjectAttributes(): NoteCommit;
}
