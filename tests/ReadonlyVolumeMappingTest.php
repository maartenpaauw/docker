<?php

declare(strict_types=1);

namespace Spatie\Docker\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\Docker\ReadonlyVolumeMapping;
use Spatie\Docker\VolumeMapping;

class ReadonlyVolumeMappingTest extends TestCase
{
    /** @test */
    public function it_should_convert_to_a_string_correctly()
    {
        $mapping = new ReadonlyVolumeMapping(
            new VolumeMapping('/foo', '/bar'),
        );

        $this->assertEquals('-v /foo:/bar:ro', $mapping);
    }
}
