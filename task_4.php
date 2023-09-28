<?php
function calculateAverageGrades($studentGrades) {
    $averages = array();
    
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        
        // Calculate the average grade for the student
        $average = $total / $count;
        
        // Store the average grade in the $averages array
        $averages[$student] = $average;
    }
    
    return $averages;
}

// Create a multidimensional array to store student grades
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $student => $average) {
    echo "$student: Average Grade = $average<br>";
}
?>
