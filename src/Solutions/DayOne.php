<?php

namespace Vaugenwakeling\Aoc2025\Solutions;

use Vaugenwakeling\Aoc2025\Helpers\LoadFile;

class DayOne
{
    const INPUT_FILE_NAME = "day1/sample.txt";

    public function run() {
        $data = (new LoadFile())->loadTxtFile(self::INPUT_FILE_NAME);

        var_dump($data);
    }
}