<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Calculator;

class CalculatorTest extends TestCase {

    protected Calculator $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator;
    }

    public static function additionProvider(): array
    {
        return [
            "first" => [0, 0, 0],
            "seconde" => [0, 1, 1],
            "three" => [1, 1, 2.0],
            "fourth" => [1, 2, 3],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAdd($a, $b, $expected): void 
    {

        $this->assertEquals($expected, $this->calculator->add($a, $b));
    }

    public function testDivisor(): void 
    {
        $result = $this->calculator->divisor(10, 3);
        $this->assertSame(3.33, $result);
    }

    public function testExceptionDivisor(): void 
    {
        $this->expectExceptionMessage('Impossible de diviser par zéro.');
        $this->calculator->divisor(3, 0);
    }
}
