<?php
function sort_grades_descending($grades) {
    rsort($grades);
    return $grades;
}

$grades = array(85, 92, 78, 88, 95);
$sorted_grades = sort_grades_descending($grades);

print_r($sorted_grades);
?>