<?php
use PHPUnit\Framework\TestCase;

final class MyTest extends TestCase
{
    public function testInstanciation()
    {
        $this->assertIsObject(new \MyClass());
    }
}
