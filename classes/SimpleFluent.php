<?php

class SimpleFluent
{
    private $a, $b, $c;

    public function getA()
    {
        return $this->a;
    }

    public function setA($a): SimpleFluent
    {
        $this->a = $a;
        return $this;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b): SimpleFluent
    {
        $this->b = $b;
        return $this;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setC($c): SimpleFluent
    {
        $this->c = $c;
        return $this;
    }


}