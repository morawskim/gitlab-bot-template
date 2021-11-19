<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\NoteIssueEventInterface;

class NoteIssueEvent extends NoteEvent implements NoteIssueEventInterface
{
    private Issue $issue;
    private NoteIssue $objectAttributes;

    public function getIssue(): Issue
    {
        return $this->issue;
    }

    public function setIssue(Issue $issue): void
    {
        $this->issue = $issue;
    }

    public function getObjectAttributes(): NoteIssue
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(NoteIssue $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
    }
}
