<?php

namespace App\Tests\Gitlab\EventFactory;

use App\Gitlab\ArrayNormalizer\CamelKeysNormalizer;
use App\Gitlab\EventFactory\NoteEventFactory;
use App\Gitlab\Payload\NoteCommitEvent;
use App\Gitlab\Payload\NoteIssueEvent;
use App\Gitlab\Payload\NoteSnippetEvent;
use App\Tests\ObjectMother\AutoMapperObjectMother;
use App\Tests\ObjectMother\GitlabPayloadObjectMother;
use Jane\Component\AutoMapper\AutoMapperInterface;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class NoteEventFactoryTest extends TestCase
{
    use MatchesSnapshots;

    private AutoMapperInterface $autoMapper;
    private CamelKeysNormalizer $camelKeysNormalizer;

    protected function setUp(): void
    {
        parent::setUp();

        @unlink(__DIR__ . '/cache/registry.php');
        $this->autoMapper = AutoMapperObjectMother::default();
        $this->camelKeysNormalizer = new CamelKeysNormalizer();
    }

    public function testNoteSnippetFactory(): void
    {
        $data = GitlabPayloadObjectMother::getWebhookPayload(GitlabPayloadObjectMother::NOTE_SNIPPET_PAYLOAD);

        $sut = new NoteEventFactory($this->autoMapper);
        $data = $this->camelKeysNormalizer->normalize($data);
        $noteEvent = $sut->create($data);

        $this->assertInstanceOf(NoteSnippetEvent::class, $noteEvent);
        $this->assertMatchesSnapshot($noteEvent);
    }

    public function testNoteCommitFactory(): void
    {
        $data = GitlabPayloadObjectMother::getWebhookPayload(GitlabPayloadObjectMother::NOTE_COMMIT_PAYLOAD);

        $sut = new NoteEventFactory($this->autoMapper);
        $data = $this->camelKeysNormalizer->normalize($data);
        $noteEvent = $sut->create($data);

        $this->assertInstanceOf(NoteCommitEvent::class, $noteEvent);
        $this->assertMatchesSnapshot($noteEvent);
    }

    public function testNoteCommitWholeFactory(): void
    {
        $data = GitlabPayloadObjectMother::getWebhookPayload(GitlabPayloadObjectMother::NOTE_COMMIT_WHOLE_PAYLOAD);

        $sut = new NoteEventFactory($this->autoMapper);
        $data = $this->camelKeysNormalizer->normalize($data);
        $noteEvent = $sut->create($data);

        $this->assertInstanceOf(NoteCommitEvent::class, $noteEvent);
        $this->assertMatchesSnapshot($noteEvent);
    }

    public function testNoteIssueFactory(): void
    {
        $data = GitlabPayloadObjectMother::getWebhookPayload(GitlabPayloadObjectMother::NOTE_ISSUE_PAYLOAD);

        $sut = new NoteEventFactory($this->autoMapper);
        $data = $this->camelKeysNormalizer->normalize($data);
        $noteEvent = $sut->create($data);

        $this->assertInstanceOf(NoteIssueEvent::class, $noteEvent);
        $this->assertMatchesSnapshot($noteEvent);
    }
}
