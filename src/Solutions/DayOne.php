<?php

namespace Vaugenwakeling\Aoc2025\Solutions;

class DayOne
{
    const INPUT_FILE_NAME_PT1 = "./data/day1/pt1/input.txt";
    const INPUT_FILE_NAME_PT2 = "./data/day1/pt2/input.txt";

    public function partOne(string $filename = self::INPUT_FILE_NAME_PT1) {
        list($right, $left) = $this->splitInputIntoLists($filename);

        $dist = [];

        $total = count($right);

        for($i = 0; $i < $total; $i++) {
            $dist[] = abs($left[$i] - $right[$i]);
        }

        return array_sum($dist);
    }

    public function partTwo(string $filename = self::INPUT_FILE_NAME_PT2) {
        list($right, $left) = $this->splitInputIntoLists($filename);

        $counts = [];

        $values = array_unique(array_values($left));

        foreach ($values as $value) {
            $counts[$value] = 0;
        }

        foreach($left as $key => $value) {
            $counts[$value] += 1;
        }

        $similarity = [];

        foreach($right as $key => $value) {

            if (!isset($counts[$value])) {
                $similarity[] = $value * 0;
                continue;
            }

            $similarity[] = $value * $counts[$value];
        }

        return array_sum($similarity);
    }

    /**
     * @param string $filename
     * @return array[]
     */
    public function splitInputIntoLists(string $filename): array
    {
        $right = [];
        $left = [];

        $handle = fopen($filename, "r");

        while (($line = fgetcsv($handle)) !== false) {
            $right[] = (int)$line[0];
            $left[] = (int)$line[1];
        }

        fclose($handle);

        sort($right);
        sort($left);
        return array($right, $left);
    }
}