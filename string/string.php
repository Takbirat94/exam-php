<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string, $matches);

    // Reverse string
    $reversedString = strrev($string);

    // Print original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
