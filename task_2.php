<?php
function removeEvenNumbers($numbers) {
    $result = array();
    foreach ($numbers as $number) {
        if ($number % 2 != 0) { // Check if the number is odd
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = range(1, 10); // Create an array containing numbers 1 to 10
$newNumbers = removeEvenNumbers($numbers);

// Print the resulting array
print_r($newNumbers);
?>
