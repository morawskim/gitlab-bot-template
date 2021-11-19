<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\NoteCommitEventInterface;

class NoteCommitEvent extends NoteEvent implements NoteCommitEventInterface
{
    private LastCommit $commit;
    private NoteCommit $objectAttributes;

    public function getCommit(): LastCommit
    {
        return $this->commit;
    }

    public function setCommit(LastCommit $commit): void
    {
        $this->commit = $commit;
    }

    public function getObjectAttributes(): NoteCommit
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(NoteCommit $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
    }
}
