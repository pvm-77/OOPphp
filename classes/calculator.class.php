<?php
class Calculator
{
    public  $firstNumber;
    public  $secondNumber;
    public $operation;
    public function __construct($n1, $n2, $op)
    {
        $this->firstNumber = $n1;
        $this->secondNumber = $n2;
        $this->operation = $op;
    }
    public function calculation()
    {
        switch ($this->operation) {
            case 'add':
                return $this->firstNumber + $this->secondNumber;
                break;
            case 'subtract':
                return $this->firstNumber - $this->secondNumber;
                break;
            default:
                echo 'error';
                break;
        }
    }
}
