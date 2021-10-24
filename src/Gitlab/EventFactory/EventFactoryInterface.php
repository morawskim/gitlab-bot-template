<?php

namespace App\Gitlab\EventFactory;

interface EventFactoryInterface
{
    public function isSupported(string $eventName): bool;

    public function create(array $data): object;
}
