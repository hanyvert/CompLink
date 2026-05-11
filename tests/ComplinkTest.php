<?php
/**
 * Tests for CompLink
 */

use PHPUnit\Framework\TestCase;
use Complink\Complink;

class ComplinkTest extends TestCase {
    private Complink $instance;

    protected function setUp(): void {
        $this->instance = new Complink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Complink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
