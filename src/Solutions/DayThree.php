<?php

namespace Vaugenwakeling\Aoc2025\Solutions;

class DayThree
{
    const INPUT_FILE_NAME_PT1 = "./data/day3/input.txt";

    public function partOne(string $filename = self::INPUT_FILE_NAME_PT1) {
        $input = file_get_contents($filename);

        $matches = [];

        preg_match_all("/mul\(\d+,\d+\)/i", $input, $matches);

        if (empty($matches)) {
            throw new \Exception("No matches found for input data");
        }

        $values = [];
        foreach (current($matches) as $match) {
            $match = str_replace('mul', '', $match);
            $match = str_replace('(', '', $match);
            $match = str_replace(')', '', $match);

            $values[] = explode(",", $match);
        }

        $totals = [];

        foreach ($values as $value) {
            $totals[] = $value[0]*$value[1];
        }

        return array_sum($totals);
    }

    public function partTwo(string $filename = self::INPUT_FILE_NAME_PT1) {
        return 'Noop';
    }
}
