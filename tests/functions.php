<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayProduct(): string
    {
        //expected result of the test

        $expected = '<div class="product"><img src="/test.jpg" alt="shoe" />';
        $expected .= "<h1>test name</h1><p>" . "<h3>Year Released: 2000</h3><br>"
            . "<h3>Color-way: green / black</h3></p>" . "<h3>Available Sizes: 4</h3><br>" . "<h3>Price: £100</div>";


        //Inputs to get the expected result
        $input = [
            'name' => 'test name',
            'images' => '/test.jpg',
            'year-released' => '2000',
            'size' => '4',
            'price' => '100',
            'color-way' => 'green / black'
        ];
        //run the real function and pass in the inputs
        $case = displayProduct($input);
        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayProduct(): int
    {
        $input = 4;
        $this->expectException(TypeError::class);
        displayProduct($input);
    }
}