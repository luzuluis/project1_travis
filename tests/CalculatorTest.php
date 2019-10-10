<?php
use PHPUnit\Framework\TestCase;
require 'Calculadora.php';
class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new calculadora();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->sumar(1, 2);
        $this->assertEquals(3, $result);
    }
    public function testMultiply()
    {
        $result = $this->calculator->multiplicar(5, 2);
        $this->assertEquals(10, $result);
    }
    public function testDivision()
    {
        $result = $this->calculator->dividir(10, 2);
        $this->assertEquals(5, $result);
    }
 public function testSubstration()
    {
        $result = $this->calculator->restar(10, 2);
        $this->assertEquals(8, $result);
    }
public function testOperacion()
    {
        $result = $this->calculator->operacion(10, 2,'suma');
        $this->assertEquals(12, $result);
        $result = $this->calculator->operacion(10, 2,'resta');
        $this->assertEquals(8, $result);
        $result = $this->calculator->operacion(10, 2,'multiplica');
        $this->assertEquals(20, $result);
        $result = $this->calculator->operacion(10, 2,'divide');
        $this->assertEquals(5, $result);


    }
}
