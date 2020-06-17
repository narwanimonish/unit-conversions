<?php

namespace Spatie\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.462, $lbs);
    }
}
