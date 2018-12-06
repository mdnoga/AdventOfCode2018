<?php

/**
 * How many IDs contain letters that appear Twice
 * How many IDs contain letters that appear Three Times
 * 
 * LetterApearingTwice * LettersAppearingThreeTImes = Checksum 
 * 
 * Read in the file
 * read each Box ID (one per line)
 * search each ID for a letter that appears twice
 * 	explode string
 * 	take the first chracter and search the string for it again
 * 		Search all the way to the end to see how many times it apears.
 * 	does it apear twice
 * 		incriment $twice counter
 *  does it appear three times
 * 		incriment tripple counter
 * 
 */

$lines = file("../../inputs/day02.txt");

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
echo "Checksum is " , $twiceCounter , " * " , $thriceCounter , " = " ,  $twiceCounter * $thriceCounter;

