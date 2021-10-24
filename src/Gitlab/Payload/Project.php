<?php

namespace App\Gitlab\Payload;

class Project
{
    private int $id;
    private string $name;
    private string $description;
    private string $webUrl;
    private ?string $avatarUrl;
    private string $gitSshUrl;
    private string $gitHttpUrl;
    private string $namespace;
    private int $visibilityLevel;
    private string $pathWithNamespace;
    private string $defaultBranch;
    private string $ciConfigPath;
    private string $homepage;
    private string $url;
    private string $sshUrl;
    private string $httpUrl;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getWebUrl(): string
    {
        return $this->webUrl;
    }

    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getGitSshUrl(): string
    {
        return $this->gitSshUrl;
    }

    public function setGitSshUrl(string $gitSshUrl): void
    {
        $this->gitSshUrl = $gitSshUrl;
    }

    public function getGitHttpUrl(): string
    {
        return $this->gitHttpUrl;
    }


    public function setGitHttpUrl(string $gitHttpUrl): void
    {
        $this->gitHttpUrl = $gitHttpUrl;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): void
    {
        $this->namespace = $namespace;
    }

    public function getVisibilityLevel(): int
    {
        return $this->visibilityLevel;
    }

    public function setVisibilityLevel(int $visibilityLevel): void
    {
        $this->visibilityLevel = $visibilityLevel;
    }

    public function getPathWithNamespace(): string
    {
        return $this->pathWithNamespace;
    }

    public function setPathWithNamespace(string $pathWithNamespace): void
    {
        $this->pathWithNamespace = $pathWithNamespace;
    }

    public function getDefaultBranch(): string
    {
        return $this->defaultBranch;
    }

    public function setDefaultBranch(string $defaultBranch): void
    {
        $this->defaultBranch = $defaultBranch;
    }

    public function getCiConfigPath(): string
    {
        return $this->ciConfigPath;
    }

    public function setCiConfigPath(string $ciConfigPath): void
    {
        $this->ciConfigPath = $ciConfigPath;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getSshUrl(): string
    {
        return $this->sshUrl;
    }

    public function setSshUrl(string $sshUrl): void
    {
        $this->sshUrl = $sshUrl;
    }

    public function getHttpUrl(): string
    {
        return $this->httpUrl;
    }

    public function setHttpUrl(string $httpUrl): void
    {
        $this->httpUrl = $httpUrl;
    }
}
