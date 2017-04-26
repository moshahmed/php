<?php
/* 2017-Apr-26 Wed 12:14 moshahmed at gmail
  https://www.startutorial.com/articles/view/phpunit-beginner-part-1-get-started
  https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html
*/

require 'Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase {
    private $calculator;
    protected function setUp() {
        $this->calculator = new Calculator();
    }
    protected function tearDown() {
        $this->calculator = NULL;
    }
    public function testAdd() {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
        $this->assertEquals(3, $this->calculator->add(1, 2));
        $this->assertContains(4, [1, 2, 3]);
        $this->assertArrayHasKey('foo', ['bar' => 'baz']);
    }
}

