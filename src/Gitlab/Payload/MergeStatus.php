<?php

namespace App\Gitlab\Payload;

class MergeStatus
{
    private string $previous;
    private string $current;

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function setPrevious(string $previous): void
    {
        $this->previous = $previous;
    }

    public function getCurrent(): string
    {
        return $this->current;
    }

    public function setCurrent(string $current): void
    {
        $this->current = $current;
    }
}
