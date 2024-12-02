<?php

class DayOneTest extends \PHPUnit\Framework\TestCase
{
    public function testDayOnePartOne()
    {
        $expected = 11;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayOne())->partOne("./data/day1/pt1/sample.txt");
        $this->assertEquals($expected, $result);
    }

    public function testDayOnePartTwo()
    {
        $expected = 31;

        $result = (new \Vaugenwakeling\Aoc2025\Solutions\DayOne())->partTwo("./data/day1/pt2/sample.txt");
        $this->assertEquals($expected, $result);
    }
}