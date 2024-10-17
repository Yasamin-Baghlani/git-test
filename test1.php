<?php

class test1
{
    public function add($num1,$num2)
    {
        $sum = $num1 + $num2;
        echo (" Result => number1: $num1 + number2: $num2 = $sum");
    }
}
$result = new test1();
$result->add(23,24);