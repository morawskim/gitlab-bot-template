<?php

namespace App\Gitlab\Exception;

use InvalidArgumentException;

class UnsupportedNoteType extends InvalidArgumentException
{
    public static function unsupportedNote(string $noteType): self
    {
        return new static(sprintf('Unsupported note "%s"', $noteType));
    }
}
