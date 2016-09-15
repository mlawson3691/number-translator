<?php
class NumberTranslator
{
    function traslate($input)
    {
        $one_digit = array(
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
            '4' => 'four',
            '5' => 'five',
            '6' => 'six',
            '7' => 'seven',
            '8' => 'eight',
            '9' => 'nine'
        );

        foreach($one_digit as $key => $value) {
            if ($input == $key) {
                $output = $value;
                break;
            }
        }
        return $output;
    }
}
?>
