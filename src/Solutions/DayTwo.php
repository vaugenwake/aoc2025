<?php

namespace Vaugenwakeling\Aoc2025\Solutions;

class DayTwo
{
    const INPUT_FILE_NAME_PT1 = "./data/day2/pt1/input.txt";

    public function partOne(string $filename = self::INPUT_FILE_NAME_PT1) {
        $data = [];

        $safeReports = 0;

        $this->readData($filename, $data);

        foreach ($data as $report) {
            if ($this->isSafeReport($report)) {
                $safeReports++;
            }
        }

        return $safeReports;
    }

    private function isSafeReport(array $values): bool
    {
        $increasing = true;
        $decreasing = true;

        $total = count($values);

        for ($i = 1; $i < $total; $i++) {
            $diff = $values[$i] - $values[$i - 1];

            // My PHP has abs ... lol
            if (abs($diff) < 1 || abs($diff) > 3) {
                $increasing = false;
                $decreasing = false;
                break;
            }

            if ($diff > 0) {
                $decreasing = false;
            }

            if ($diff < 0) {
                $increasing = false;
            }
        }

        return $increasing || $decreasing;
    }

    private function readData(string $filepath, array &$data)
    {
        $handle = fopen($filepath, "r");

        while (($line = fgetcsv($handle)) !== false) {
            $data[] = $line;
        }

        fclose($handle);
    }

//    public function partTwo(string $filename = self::INPUT_FILE_NAME_PT2) {
//
//    }
}