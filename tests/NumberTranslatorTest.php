<?php
    require_once "src/NumberTranslator.php";
    class NumberTranslatorTests extends PHPUnit_Framework_TestCase
    {
        function test_translate_ones()
        {
            $translator = new NumberTranslator;
            $input = '5';
            $output = $translator->translate($input);
            $this->assertEquals("five", $output);
        }

        function test_translate_tens()
        {
            $translator = new NumberTranslator;
            $input = '25';
            $output = $translator->translate($input);
            $this->assertEquals("twenty five", $output);
        }

        function test_translate_hund()
        {
            $translator = new NumberTranslator;
            $input = '252';
            $output = $translator->translate($input);
            $this->assertEquals("two hundred fifty two", $output);
        }

        function test_translate_thous()
        {
            $translator = new NumberTranslator;
            $input = '2566';
            $output = $translator->translate($input);
            $this->assertEquals("two thousand five hundred sixty six", $output);
        }

        function test_translate_teenthous()
        {
            $translator = new NumberTranslator;
            $input = '17899';
            $output = $translator->translate($input);
            $this->assertEquals("seventeen thousand eight hundred ninety nine", $output);
        }

        function test_translate_ten_thous()
        {
            $translator = new NumberTranslator;
            $input = '82566';
            $output = $translator->translate($input);
            $this->assertEquals("eighty two thousand five hundred sixty six", $output);
        }

        function test_translate_hun_thous()
        {
            $translator = new NumberTranslator;
            $input = '682566';
            $output = $translator->translate($input);
            $this->assertEquals("six hundred eighty two thousand five hundred sixty six", $output);
        }

        function test_translate_mill()
        {
            $translator = new NumberTranslator;
            $input = '2682566';
            $output = $translator->translate($input);
            $this->assertEquals("two million six hundred eighty two thousand five hundred sixty six", $output);
        }

    }
?>
