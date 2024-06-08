<?php
    echo "<h2>String Operations:</h2>";

    // Concatenation
    $str1 = "Hello";
    $str2 = "World!";
    $str3 = $str1 . " " . $str2;
    echo "Concatenation: " . $str1 . " " . $str2 . "<br>";

    // String Length
    echo "String Length: " . strlen($str3) . "<br>";

    // Word Count
    echo "Word Count: " . str_word_count($str3) . "<br>";

    // Reverse String
    echo "Reverse String: " . strrev($str3) . "<br>";

    // Search for a specific text
    echo "Search for a specific text: " . strpos($str3, "World") . "<br>";

    // Replace text
    echo "Replace text: " . str_replace("World", "Universe", $str3) . "<br>";
?>