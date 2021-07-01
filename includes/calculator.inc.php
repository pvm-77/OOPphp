<?php
include 'class-autoload.inc.php';




//fetch info from submit form
$num1 = $_POST['firstNumber'];
$num2 = $_POST['secondNumber'];
$operator = $_POST['select_operation'];


//controller logic
$calculator_object = new Calculator($num1, $num2, $operator);
try {
    echo $calculator_object->calculation();
} catch (TypeError $e) {
    echo 'Error' . $e->getMessage();
}
