<?php

class Grid
{
    private $length;
    public $grids = array();
    
    public function __construct($length)
    {
        $this->length = $length;
    }
    
    public static function generateGrid($length)
    {
        $grid = new Grid($length);
        for ($cnt = 0; $cnt < $length; $cnt++) {
            $grid->grids[$cnt] = array_fill(0, $length, 0);
        }
        return $grid;
    }
    
    public function getLength()
    {
        return $this->length;
    }
}
