<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TriangleTest
 *
 * @author junaid.tariq
 */
require 'Shape.php';
require 'ShapeFactory.php';
require 'Triangle.php';
class TriangleTest extends PHPUnit_Framework_TestCase {
    //put your code here
    private $tri;
    private $sf;
    
    protected function setUp()
    {
        $this->sf = new ShapeFactory();
        $this->tri = $this->sf->create("Triangle");
    }
 
    protected function tearDown()
    {
        $this->sf = NULL;
        $this->tri = NULL;
    }
    
    function doStuff(Shape $shape) {
        return $shape->draw();
    }
    
    public function testDraw()
    {
        $result = $this->doStuff($this->tri);
        $this->assertEquals("Drawing a Triangle", $result);
    }
}
