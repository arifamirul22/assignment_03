<?php
$numbers = range(1, 10);

function removeEvenNumbers($evenNumbers) {
    $result = array(); 

    foreach ($evenNumbers as $num) {
        if ($num % 2 != 0) {
            $result[] = $num;
        }
    }

    return $result;
}

$filteredNumbers = removeEvenNumbers($numbers);

print_r($filteredNumbers);
?>