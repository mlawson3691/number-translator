<?php
    require_once "src/NumberTranslator.php";
    class NumberTranslatorTests extends PHPUnit_Framework_TestCase
    {
        function test_translate_1()
        {
            $translator = new NumberTranslator;
            $input = 1;
            $output = $translator->translate($input);
            $this->assertEquals("one", $output);
        }

    }
?>
