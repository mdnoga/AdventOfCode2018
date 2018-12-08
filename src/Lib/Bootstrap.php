<?php

namespace AdventOfCode\Lib;

class Bootstrap
{
    public function runDay($day)
    {
        // check if $day is empty, default to day 1
        if (empty($day)) {
            $day = 01;
        }

        echo "Running Day$day \n";
        echo "============================= \n";

        $class = sprintf("\\AdventOfCode\Day%02d", $day);

        $dayObj = new $class();
        try {
            echo "Part 1:\n";
            echo $dayObj->part1() . "\n";
        } catch (\Exception $e) {
            echo "Exception in Part 1: ". $e->getMessage() . "\n";
        }
        try {
            echo "Part 2:\n";
            echo $dayObj->part2() . "\n";
        } catch (\Exception $e) {
            echo "Exception in Part 2: ". $e->getMessage() . "\n";
        }

    }
}