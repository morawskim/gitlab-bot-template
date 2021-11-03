<?php

namespace App\Tests\ObjectMother;

class GitlabPayloadObjectMother
{
    public const MERGE_REQUEST_PAYLOAD = 'merge-request.json';
    public const NOTE_SNIPPET_PAYLOAD = 'note-snippet.json';
    public const NOTE_COMMIT_PAYLOAD = 'note-commit.json';
    public const NOTE_COMMIT_WHOLE_PAYLOAD = 'note-commit-whole.json';
    public const NOTE_ISSUE_PAYLOAD = 'note-issue.json';

    /**
     * @psalm-param self::* $fileName
     *
     * @return array
     */
    public static function getWebhookPayload(string $fileName): array
    {
        return json_decode(
            file_get_contents(__DIR__ . '/../fixture/' . $fileName),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }

}
