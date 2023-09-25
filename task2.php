<?php

$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A',
];

if (array_key_exists('grade', $student)) {
    echo "Result:{$student['grade']}";
} else {
    echo 'Grade key not exist';
}