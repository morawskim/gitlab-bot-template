<?php

namespace App\Gitlab\EventFactory;

use App\Gitlab\Contract\GitlabEvent;

interface EventFactoryInterface
{
    public function isSupported(string $eventName): bool;

    public function create(array $data): GitlabEvent;
}
