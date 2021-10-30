<?php

namespace App\Gitlab\Payload;

class NoteCommitEvent extends NoteEvent
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
