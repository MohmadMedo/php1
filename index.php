<?php
function calculate($num1, $num2): void {
  
    $multiplication = $num1 * $num2;
    $difference = $num1 - $num2;
    if ($num2 != 0) {
        $division = $num1 / $num2;
    } else {
        $division = "Cannot divide by zero";
    }
    echo "Multiplication: " . $multiplication . "<br>";
    echo "Difference: " . $difference . "<br>";
    echo "Division: " . $division . "<br>";
}
calculate(num1: 10, num2: 5);
?>
