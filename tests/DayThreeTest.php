<?php

class DayThreeTest extends \PHPUnit\Framework\TestCase
{
    public function testDayThreePartOne(): void
    {
        $expected = 161;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayThree())->partOne('./data/day3/sample.txt');

        $this->assertEquals($expected, $result);
    }
}
