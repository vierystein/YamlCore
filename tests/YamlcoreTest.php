<?php
/**
 * Tests for YamlCore
 */

use PHPUnit\Framework\TestCase;
use Yamlcore\Yamlcore;

class YamlcoreTest extends TestCase {
    private Yamlcore $instance;

    protected function setUp(): void {
        $this->instance = new Yamlcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Yamlcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
