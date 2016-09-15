<?php
class NumberTranslator
{
    function translate($input)
    {
        $output = array();

        $ones_digit = array(
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
            '4' => 'four',
            '5' => 'five',
            '6' => 'six',
            '7' => 'seven',
            '8' => 'eight',
            '9' => 'nine',
        );

        $teens = array(
            '10' => 'ten',
            '11' => 'eleven',
            '12' => 'twelve',
            '13' => 'thirteen',
            '14' => 'fourteen',
            '15' => 'fifteen',
            '16' => 'sixteen',
            '17' => 'seventeen',
            '18' => 'eighteen',
            '19' => 'nineteen'
        );

        $tens_digit = array(
            '2' => 'twenty',
            '3' => 'thirty',
            '4' => 'fourty',
            '5' => 'fifty',
            '6' => 'sixty',
            '7' => 'seventy',
            '8' => 'eighty',
            '9' => 'ninety'
        );

        // 1,000,000 - 9,999,999
        if($input > 999999) {
            foreach($ones_digit as $key => $value) {
                if($input[0] == $key) {
                    array_push($output, $value . " million");
                    $input -= ($key * 1000000);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 100,000-999,999
        if($input > 99999) {
            foreach($ones_digit as $key => $value) {
                if($input[0] == $key) {
                    array_push($output, $value . " hundred");
                    $input -= ($key * 100000);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 20,000 - 99,999
        if($input > 19999) {
            foreach($tens_digit as $key => $value) {
                if($input[0] == $key) {
                    array_push($output, $value);
                    $input -= ($key * 10000);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 10,000 - 19,999
        if($input > 9999) {
            foreach($teens as $key => $value) {
                if($input[0].$input[1] == $key) {
                    array_push($output, $value . " thousand");
                    $input -= ($key * 1000);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 1,000 - 9,999
        if($input > 999) {
            foreach($ones_digit as $key => $value) {
                if($input[0] == $key) {
                    array_push($output, $value . " thousand");
                    $input -= ($key * 1000);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 100 - 999
        if($input > 99) {
            foreach($ones_digit as $key => $value) {
                if($input[0] == $key) {
                    array_push($output, $value . " hundred");
                    $input -= ($key * 100);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 20 - 99
        if ($input > 19) {
            foreach($tens_digit as $key => $value) {
                if ($input[0] == $key) {
                    array_push($output, $value);
                    $input -= ($key * 10);
                    $input = (string)$input;
                    break;
                }
            }
        }

        // 0 - 19
        if ($input > 0) {
            foreach($ones_digit as $key => $value) {
                if ($input == $key) {
                    array_push($output, $value);
                    break;
                }
            }
        }
        return implode(" ", $output);
    }
}
?>
