<?php
// Print your name in the text "Hello World, Saqif!"
$name = "Saqif";
echo "Hello World, $name!\n";

// Declare five variables that store real numbers and display the total, average, largest, and lowest numbers
$num1 = 1.2;
$num2 = 2.3;
$num3 = 3.4;
$num4 = 4.5;
$num5 = 5.6;

$total = $num1 + $num2 + $num3 + $num4 + $num5;
$average = $total / 5;
$largest = max($num1, $num2, $num3, $num4, $num5);
$lowest = min($num1, $num2, $num3, $num4, $num5);

echo "Total: $total\n";
echo "Average: $average\n";
echo "Largest: $largest\n";
echo "Lowest: $lowest\n";

// Declare two array variables, `name` and `marks`, and display each name with his/her respective marks
$name = array("Cloud", "Tifa", "Jessie", "Aerith", "Barett");
$marks = array(90, 85, 88, 92, 87);

for ($i = 0; $i < count($name); $i++) {
    echo $name[$i] . " scored " . $marks[$i] . " marks.\n";
}
?>
