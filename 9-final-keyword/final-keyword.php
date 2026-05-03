<?php

/* You can use final before class or method . In case of class , the class cannot be extended , incase of method the method cannot be overridden
by a child class */


    final class Calculator 
    {
        final public function calculatePercentage(int $part , int $whole) : float 
            {
                return ($part/$whole)*100;
            }

    }

    class FinanceCalculator extends Calculator 
    {
        public function calculatePercentage(int $part , int $whole) : float
            {
                return $part/$whole;
            }
        }
 

        $calculator = new Calculator;
        echo $calculator->calculatePercentage(10 , 15);





?>