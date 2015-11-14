<?php

class GameTest extends PHPUnit_Framework_TestCase
{
    private static $grid;
    private static $length = 5;
    
    public static function setUpBeforeClass()
    {
        self::$grid = Grid::generateGrid(self::$length);
    }
    
    public function testGenerateGrid()
    {
        $this->assertTrue(class_exists('Grid'));
        $this->assertTrue(method_exists('Grid', 'generateGrid'));
        $this->assertInstanceOf('Grid', self::$grid);
        $this->assertTrue(method_exists(self::$grid, 'getLength'));
        $this->assertObjectHasAttribute('grids', self::$grid);
        $this->assertInternalType('array', self::$grid->grids);
        $this->assertCount(self::$length, self::$grid->grids);
        $this->assertGridInternalStructure(self::$grid, self::$length);
    }
    
    private function assertGridInternalStructure(Grid $grid, $length)
    {
        foreach ($grid->grids as $myGrid) {
            $this->assertInternalType('array', $myGrid);
            $this->assertCount($length, $myGrid);
            foreach ($myGrid as $element) {
                $this->assertEquals(0, $element);
            }
        }
    }
    
    public function testGenerateGridWithInitialConfiguration()
    {
        $configuration = array(
            array()
        );
        $this->assertGridHasConfiguration(self::$grid, $configuration);
    }
}
