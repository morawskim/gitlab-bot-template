<?php

namespace App\Gitlab\Payload;

class Diff
{
    private string $diff;
    private string $new_path;
    private string $oldPath;
    private string $a_mode;
    private string $b_mode;
    private bool $newFile;
    private bool $renamed_file;
    private bool $deletedFile;

    public function getDiff(): string
    {
        return $this->diff;
    }

    public function setDiff(string $diff): void
    {
        $this->diff = $diff;
    }

    public function getNewPath(): string
    {
        return $this->new_path;
    }

    public function setNewPath(string $new_path): void
    {
        $this->new_path = $new_path;
    }

    public function getOldPath(): string
    {
        return $this->oldPath;
    }

    public function setOldPath(string $oldPath): void
    {
        $this->oldPath = $oldPath;
    }

    public function getAMode(): string
    {
        return $this->a_mode;
    }

    public function setAMode(string $a_mode): void
    {
        $this->a_mode = $a_mode;
    }

    public function getBMode(): string
    {
        return $this->b_mode;
    }

    public function setBMode(string $b_mode): void
    {
        $this->b_mode = $b_mode;
    }

    public function isNewFile(): bool
    {
        return $this->newFile;
    }

    public function setNewFile(bool $newFile): void
    {
        $this->newFile = $newFile;
    }

    public function isRenamedFile(): bool
    {
        return $this->renamed_file;
    }

    public function setRenamedFile(bool $renamed_file): void
    {
        $this->renamed_file = $renamed_file;
    }

    public function isDeletedFile(): bool
    {
        return $this->deletedFile;
    }

    public function setDeletedFile(bool $deletedFile): void
    {
        $this->deletedFile = $deletedFile;
    }
}
