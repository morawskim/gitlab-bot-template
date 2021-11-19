<?php

namespace App\Gitlab\Payload;

use App\Gitlab\Contract\NoteSnippetEventInterface;

class NoteSnippetEvent extends NoteEvent implements NoteSnippetEventInterface
{
    private Snippet $snippet;
    private NoteSnippet $objectAttributes;

    public function getSnippet(): Snippet
    {
        return $this->snippet;
    }

    public function setSnippet(Snippet $snippet): void
    {
        $this->snippet = $snippet;
    }

    public function getObjectAttributes(): NoteSnippet
    {
        return $this->objectAttributes;
    }

    public function setObjectAttributes(NoteSnippet $objectAttributes): void
    {
        $this->objectAttributes = $objectAttributes;
    }
}
