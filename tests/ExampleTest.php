<?php


namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\equalTo;

class ExampleTest extends TestCase {

    public function testThatTrueIsTrue() {
        $this->assertTrue(true);

        $this->assertEquals(true, true);

        $this->assertThat(true, equalTo(true));

    }
}