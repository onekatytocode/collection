<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayProduct()
    {
        //expected result of the test

        $expected = '<div class="product"><img src="/test.jpg" alt="nikeshoe" width=550 height=360; />';
        $expected .= "<p><h1>test name</h1><p>" . "<h4>YEAR RELEASED: 2000</h4><br>"
            . "<h4>COLOR-WAY: green / black</h4></p>" . "<h4>AVAILABLE SIZES: 4</h4><br>" . "<h4>PRICE: £100</h4></div>";


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