<?php

class DayTwoTest extends \PHPUnit\Framework\TestCase
{
    public function testDayTwoPartOne()
    {
        $expected = 2;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayTwo())->partOne('./data/day2/pt1/sample.txt');

        $this->assertEquals($expected, $result);
    }

    public function testDayTwoPartTwo()
    {
        $expected = 4;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayTwo())->partTwo('./data/day2/pt1/sample.txt');

        $this->assertEquals($expected, $result);
    }
}
