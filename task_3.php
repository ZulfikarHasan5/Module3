<?php
function sortGradesDescending($grades) {
    rsort($grades); // Sort the array in descending order
    return $grades;
}

$grades = array(85, 92, 78, 88, 95); // Create an array with grades
$sortedGrades = sortGradesDescending($grades);

// Print the sorted grades as an array
print_r($sortedGrades);
?>
