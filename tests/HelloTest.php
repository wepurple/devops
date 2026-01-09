<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, BTS SIO SLAM!', $hello->sayHello('BTS SIO SLAM'));
    }

    public function testSayHelloEmpty(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, !', $hello->sayHello(''));
    }

    public function testSayHelloSpecialChars(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, @dm!n#2024!', $hello->sayHello('@dm!n#2024'));
    }

    public function testNumericName(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, 123!', $hello->sayHello('abc'));
    }

    public function testReturnType(): void
    {
        $hello = new Hello();
        $result = $hello->sayHello('Test');
        $this->assertIsString($result);
    }
}