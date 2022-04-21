<?php

declare(strict_types=1);

namespace Spatie\Docker;

class ReadonlyVolumeMapping
{
    private VolumeMapping $volumeMapping;

    public function __construct(VolumeMapping $volumeMapping)
    {
        $this->volumeMapping = $volumeMapping;
    }

    public function __toString(): string
    {
        return "{$this->volumeMapping}:ro";
    }
}
