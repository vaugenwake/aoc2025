<?php

class DayThreeTest extends \PHPUnit\Framework\TestCase
{
    public function testDayThreePartOne(): void
    {
        $expected = 161;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayThree())->partOne('./data/day3/pt1/sample.txt');

        $this->assertEquals($expected, $result);
    }

    public function testDayThreePartTwo(): void
    {
        $expected = 48;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayThree())->partTwo('./data/day3/pt2/sample.txt');

        $this->assertEquals($expected, $result);
    }
}
