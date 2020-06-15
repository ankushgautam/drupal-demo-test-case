<?php

namespace Drupal\Tests\my_testcase\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\my_testcase\Length;

/**
 * Simple test to ensure that asserts pass.
 *
 * @group my_testcase
 */
class LengthTest extends UnitTestCase
{

    protected $unit;

    /**
     * Before a test method is run, setUp() is invoked.
     * Create new unit object.
     */
    public function setUp(): void {
        $this->unit = new Length();
    }

    /**
     * @covers Drupal\phpunit_example\Unit::setLength
     */
    public function testSetLength() {

        $this->assertEquals(0, $this->unit->getLength());
        $this->unit->setLength(9);
        $this->assertEquals(9, $this->unit->getLength());
    }

    /**
     * @covers Drupal\phpunit_example\Unit::getLength
     */
    public function testGetLength() {

        $this->unit->setLength(9);
        $this->assertNotEquals(10, $this->unit->getLength());
    }

    /**
     * Once test method has finished running, whether it succeeded or failed, tearDown() will be invoked.
     * Unset the $unit object.
     */
    public function tearDown(): void {
        unset($this->unit);
    }

    /**
     * Check string comparison.
     */
    public function testQuadrupal() {
        $this->assertEquals('Drupaldrupaldrupaldrupal', $this->unit->quadrupal('drupal'));
    }
}