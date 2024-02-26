<?php
use App\Calculator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class CalculatorTest extends TestCase {

    #[DataProvider('additionProvider')]
    public function testSum($a, $b, $expected) {
        $calculette = new Calculator;
        $this->assertEquals($expected, $calculette->sum($a, $b));
    }

    public static function additionProvider() {
        return [
            [0, 0, 0], // $a, $b, $expected
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }
}