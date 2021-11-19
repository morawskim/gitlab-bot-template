<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\NoteMergeRequestEventInterface;

class NoteMergeRequestEvent extends NoteEvent implements NoteMergeRequestEventInterface
{
    private MergeRequest $mergeRequest;
    private Note $objectAttributes;

    public function getMergeRequest(): MergeRequest
    {
        return $this->mergeRequest;
    }

    public function setMergeRequest(MergeRequest $mergeRequest): void
    {
        $this->mergeRequest = $mergeRequest;
    }

    public function getObjectAttributes(): Note
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(Note $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
    }
}
