<?php

namespace AdventOfCode\Lib;

class General 
{
    static function readFile($fileName = null): array
    {
        // Todo: make this look for the file named adter the class (day)
        if ($fileName == null) {
            return '';
        }

        return file("src/inputs/$fileName.txt", FILE_IGNORE_NEW_LINES); 
    }

    static function arrayHasValue($array, $value): bool
    {
        return isset($array[$value]);
    }

}