<?php 

namespace AdventOfCode;

use AdventOfCode\Lib\General;

class Day01
{
    const DAY = 'day01';

    public function part1() {
        
        $numbers = self::getInput();
        return "Current frequency after all input: " . array_sum($numbers);
    }

    public function part2() {
        //$numbers = [+1, -10, +10, -4, -4];
        $numbers = $numbers = self::getInput();
        $seen = [];
        $marker = 0;
           
        $totalChanges = count($numbers);
        $i = 0;

        do {
            // reset to the beginning if at the end of the list and no repeat found yet
            if (!isset($numbers[$i])) {
                $i = 0;
            }
            $marker += $numbers[$i];
            if (General::arrayHasValue($seen, $marker)) {
                break;
            } else {
                $seen[$marker] = 1;
            }
            $i++;
        } while (true);

        return "First repeat frequency: " . $marker;
    }

    private function getInput() {
        return General::readFile(self::DAY);
    }

}