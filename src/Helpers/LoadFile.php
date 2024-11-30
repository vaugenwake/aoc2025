<?php

namespace Vaugenwakeling\Aoc2025\Helpers;

class LoadFile
{
    const DATA = __DIR__ . '/../../data/';

    public function loadTxtFile(string $name): string {
        return file_get_contents(self::DATA . $name);
    }

    public function loadCsvFile(string $name, string $sep): array {
        return str_getcsv($this->loadTxtFile($name), $sep);
    }
}