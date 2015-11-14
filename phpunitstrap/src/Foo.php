<?php

class Foo
{
    protected $a;

    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function addition()
    {
        return $this->a + $this->b;
    }

    public function multiplication()
    {
        return $this->a * $this->b;
    }
}
