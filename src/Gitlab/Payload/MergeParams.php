<?php

namespace App\Gitlab\Payload;

class MergeParams
{
    private $forceRemoveSourceBranch;

    /**
     * @return mixed
     */
    public function getForceRemoveSourceBranch()
    {
        return $this->forceRemoveSourceBranch;
    }

    /**
     * @param mixed $forceRemoveSourceBranch
     */
    public function setForceRemoveSourceBranch($forceRemoveSourceBranch): void
    {
        $this->forceRemoveSourceBranch = $forceRemoveSourceBranch;
    }
}
