<?php

require_once "vendor/autoload.php";

$runners = [
    1 => \Vaugenwakeling\Aoc2025\Solutions\DayOne::class
];

if (!isset($argv[1])) {
    throw new Exception('Expected day');
}

$inputFile = null;

$exec = new $runners[$argv[1]]();
//echo $exec->partOne();

echo $exec->partTwo();