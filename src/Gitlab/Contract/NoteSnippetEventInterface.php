<?php

namespace App\Gitlab\Contract;

use App\Gitlab\Payload\NoteSnippet;
use App\Gitlab\Payload\Snippet;

interface NoteSnippetEventInterface extends NoteEventInterface
{
    public function getSnippet(): Snippet;

    public function getObjectAttributes(): NoteSnippet;
}
