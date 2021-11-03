<?php

namespace App\Tests\Gitlab\EventFactory;

use App\Gitlab\ArrayNormalizer\CamelKeysNormalizer;
use App\Gitlab\EventFactory\MergeRequestEventFactory;
use App\Tests\ObjectMother\AutoMapperObjectMother;
use App\Tests\ObjectMother\GitlabPayloadObjectMother;
use Jane\Component\AutoMapper\AutoMapperInterface;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class MergeRequestEventFactoryTest extends TestCase
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

    public function testMergeRequestMap(): void
    {
        $data = GitlabPayloadObjectMother::getWebhookPayload(GitlabPayloadObjectMother::MERGE_REQUEST_PAYLOAD);

        $sut = new MergeRequestEventFactory($this->autoMapper);
        $data = $this->camelKeysNormalizer->normalize($data);
        $mergeRequest = $sut->create($data);

        $this->assertMatchesSnapshot($mergeRequest);
    }
}
