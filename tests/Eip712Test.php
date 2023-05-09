<?php

namespace Tests;
use SleepFinance\Eip712;
use Tests\TestCase;

/**
 * @coversDefaultClass \SleepFinance\Eip712
 */
class Eip712Test extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testHashTypedDataV4()
    {
        $invalidSchema = file_get_contents(__DIR__ . '/__fixtures__/invalid-schema.json');
        $this->expectExceptionMessage('Invalid Typed Data');
        new Eip712($invalidSchema);
    }
}
