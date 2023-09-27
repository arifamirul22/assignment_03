
<?php

$studentGrades = [
    // Student 1
    [
        "Math" => 85,
        "English" => 92,
        "Science" => 78,
    ],
    // Student 2
    [
        "Math" => 90,
        "English" => 88,
        "Science" => 76,
    ],
    // Student 3
    [
        "Math" => 78,
        "English" => 85,
        "Science" => 89,
    ],
];

function calculateAverageGrades($grades) {
    foreach ($grades as $studentIndex => $student) {
        $total = 0;
        $subjectCount = count($student);

        foreach ($student as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / $subjectCount;
        echo "Student " . "\n". ($studentIndex + 1) . " Average Grade: " . round($average, 2);
    }
}

calculateAverageGrades($studentGrades);

?>
