<?php 

namespace AdventOfCode;

use AdventOfCode\Lib\General;

class Day02
{
    const DAY = 'day02';

    public function part1() {
        $lines = self::getInput();

        // $lines = [
        //     "abcdef",
        //     "bababc",
        //     "abbcde",
        //     "abcccd",
        //     "aabcdd",
        //     "abcdee",
        //     "ababab"
        // ];

        $twiceCounter = 0;
        $thriceCounter = 0;

        foreach ($lines as $line) {
            $lineCharacters = str_split($line);
            $charactersChecked = array();
            $twiceCheck = false;
            $thriceCheck = false;
            foreach ($lineCharacters as $character) {
                $count = substr_count($line, $character);

                if ($count == 2 && !in_array($character, $charactersChecked) && !$twiceCheck) {
                    $twiceCounter++;
                    $charactersChecked[] = $character;
                    $twiceCheck = true;
                } else if ($count == 3 && !in_array($character, $charactersChecked) && !$thriceCheck) {
                    $thriceCounter++;
                    $charactersChecked[] = $character;
                    $thriceCheck = true;
                }
            }
        }

        echo "Twice Count: " . $twiceCounter , "\xA";
        echo "Thrice Count: " . $thriceCounter . "\xA";
        echo "Checksum is " , $twiceCounter , " * " , $thriceCounter , " = " ,  $twiceCounter * $thriceCounter . "\n";
    }

    public function part2() {
        $boxIds = self::getInput();
        $boxIds = array_map('str_split', $boxIds);

        foreach ($boxIds as $a) {
            foreach ($boxIds as $b) {
                $diffs = array_diff_assoc($a, $b);
                if (1 != count($diffs)) {
                    continue;
                }
                $key = array_keys($diffs)[0];
                unset($a[$key]);
                return implode("", $a);
            }
        }

        return "Could not find a correct pair of boxes";
    }

    private function getInput() {
        return General::readFile(self::DAY);
    }
}