<?php

$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 30.0;
$on_discount = true;

echo "Course title: " . $course_name . "\n";
echo "Enrolled Students: " . $enrolled_students . "\n";
echo "Course price: " . $price . " \$ ";
echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "\n";
?>
