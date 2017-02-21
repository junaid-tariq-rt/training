<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CircleTest
 *
 * @author junaid.tariq
 */
require 'Shape.php';
require 'ShapeFactory.php';
require 'Circle.php';

class CircleTest extends PHPUnit_Framework_TestCase{
    //put your code here
    private $cir;
    private $sf;
    
    protected function setUp()
    {
        $this->sf = new ShapeFactory();
        $this->cir = $this->sf->create("Circle");
    }
 
    protected function tearDown()
    {
        $this->sf = NULL;
        $this->cir = NULL;
    }
    
    function doStuff(Shape $shape) {
        return $shape->draw();
    }
    
    public function testDraw()
    {
        $result = $this->doStuff($this->cir);
        $this->assertEquals("Drawing a Circle", $result);
    }
}
