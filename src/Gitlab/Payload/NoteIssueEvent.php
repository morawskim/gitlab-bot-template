<?php

namespace App\Gitlab\Payload;

class NoteIssueEvent extends NoteEvent
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
