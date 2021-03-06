<?php

declare(strict_types=1);

namespace FlixTech\AvroSerializer\Objects\Schema;

use FlixTech\AvroSerializer\Objects\Schema;

class MapType extends ComplexType
{
    public function __construct()
    {
        parent::__construct('map');
    }

    public function values(Schema $schema): self
    {
        return $this->attribute('values', $schema);
    }

    /**
     * @param array<string, mixed> $default
     */
    public function default(array $default): self
    {
        return $this->attribute('default', $default);
    }
}
