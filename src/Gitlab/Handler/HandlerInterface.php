<?php

namespace App\Gitlab\Handler;

use App\Gitlab\Contract\GitlabEvent;

interface HandlerInterface
{
    public function isSupported(GitlabEvent $event): bool;
    public function process(GitlabEvent $event): void;
}
