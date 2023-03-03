<?php
$student_name = 'Nguyen Thanh An';
$test_scores = array(70, 85, 92, 78, 89);

$sum = array_sum($test_scores);
$average = $sum / count($test_scores);

if ($average >= 90) {
    $grade = 'A';
} else {
    if ($average >= 80) {
        $grade = 'B';
    } else {
        if ($average >= 70) {
            $grade = 'C';
        } else {
            if ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
        }
    }
}
echo "Sinh viên $student_name có điểm trung bình là $average và được xếp loại học lực $grade.";
