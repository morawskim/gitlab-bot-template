<?php

namespace App\Gitlab\Payload;

class Snippet
{
    private int $id;
    private string $title;
    private string $content;
    private int $authorId;
    private int $projectId;
    private string $createdAt;
    private string $updatedAt;
    private string$fileName;
    private string $type;
    private int $visibilityLevel;
    private string $description;
    private $encryptedSecretToken;
    private $encryptedSecretTokenIv;
    private bool $secret;
    private bool $repositoryReadOnly;
    private $secretToken;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getProjectId(): int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getVisibilityLevel(): int
    {
        return $this->visibilityLevel;
    }

    public function setVisibilityLevel(int $visibilityLevel): void
    {
        $this->visibilityLevel = $visibilityLevel;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getEncryptedSecretToken()
    {
        return $this->encryptedSecretToken;
    }

    public function setEncryptedSecretToken($encryptedSecretToken): void
    {
        $this->encryptedSecretToken = $encryptedSecretToken;
    }

    public function getEncryptedSecretTokenIv()
    {
        return $this->encryptedSecretTokenIv;
    }

    public function setEncryptedSecretTokenIv($encryptedSecretTokenIv): void
    {
        $this->encryptedSecretTokenIv = $encryptedSecretTokenIv;
    }

    public function isSecret(): bool
    {
        return $this->secret;
    }

    public function setSecret(bool $secret): void
    {
        $this->secret = $secret;
    }

    public function isRepositoryReadOnly(): bool
    {
        return $this->repositoryReadOnly;
    }

    public function setRepositoryReadOnly(bool $repositoryReadOnly): void
    {
        $this->repositoryReadOnly = $repositoryReadOnly;
    }

    public function getSecretToken()
    {
        return $this->secretToken;
    }

    public function setSecretToken($secretToken): void
    {
        $this->secretToken = $secretToken;
    }
}
