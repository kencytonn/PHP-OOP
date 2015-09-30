<?php

class Calculator
{
    function  addition($first_number, $second_number)
    {
        $result['value'] = $first_number + $second_number;
        $result['label_value'] = 'Addition';
        return $result;
    }

    function  subtraction($first_number, $second_number)
    {

        $result['value'] = $first_number - $second_number;
        $result['label_value'] = 'Subtraction';
        return $result;
    }

    function  multiply($first_number, $second_number)
    {

        $result['value'] = $first_number * $second_number;
        $result['label_value'] = 'Multiplication';
        return $result;
    }

    function  division($first_number, $second_number)
    {

        if ($second_number == 0) {
            $result['value'] = "Undefined";
            $result['label_value'] = 'Division';
            return $result;
        } else {

            $result['value'] = $first_number / $second_number;
            $result['label_value'] = 'Division';
            return $result;
        }

    }

// If a zero value is entered in either
    function nothing()
    {
        $result['value'] = "Undefined";
        return $result;
    }

}
