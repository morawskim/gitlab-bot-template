<?php

namespace App\Gitlab;

use App\Gitlab\Handler\HandlerInterface;

class HandleService
{
    private iterable $handlers;

    /**
     * @param iterable<HandlerInterface> $handlers
     */
    public function __construct(iterable $handlers)
    {
        $this->handlers = $handlers;
    }

    public function process(GitlabEvent $obj): void
    {
        foreach ($this->handlers as $handler) {
            if ($handler->isSupported($obj)) {
                $handler->process($obj);
            }
        }
    }
}
