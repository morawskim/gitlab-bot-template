<?php

namespace App\Gitlab\Payload;

class Changes
{
    private MergeStatus $mergeStatus;

    public function getMergeStatus(): MergeStatus
    {
        return $this->mergeStatus;
    }

    public function setMergeStatus(MergeStatus $mergeStatus): void
    {
        $this->mergeStatus = $mergeStatus;
    }
}
