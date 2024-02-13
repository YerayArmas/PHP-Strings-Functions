<?php

// Iteration 1

// 1.1

$main = "Baby!";

function showLength($long) {
    echo "This string has " . strlen($long) . " characters." . "\n \n";
}
showLength($main);


// 1.2

function removeFirstAndLastChar($char) {
    if (strlen($char) <= 2) {
        echo "Sorry, the string is too short";
    } else {
    echo substr($char, 1, -1);
}};
removeFirstAndLastChar($main);


// 1.3

1.3. - replaceUser(string1, string2) This function receives two strings.

If the first string contains the word "user", it will replace the word "user" with whats inside string2.

For example if string1 = "Welcome user" and string2 = "John" the result of replaceUser must be "Welcome John".

NOTE: In case the word user appears more than once, it should only replace the first "user" found.
