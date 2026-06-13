<?php
/**
 * Tests for CryptoStack
 */

use PHPUnit\Framework\TestCase;
use Cryptostack\Cryptostack;

class CryptostackTest extends TestCase {
    private Cryptostack $instance;

    protected function setUp(): void {
        $this->instance = new Cryptostack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptostack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
