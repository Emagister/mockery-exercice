<?php

namespace Exercice4;

class LargeClass
{
    /**
     * @var int
     */
    private $c1;

    /**
     * @var int
     */
    private $c2;

    public function __construct($c1, $c2)
    {
        $this->c1 = $c1;
        $this->c2 = $c2;
    }

    public function dummy1()
    {
        return 1;
    }

    public function dummy2()
    {
        return 1;
    }

    public function dummy3()
    {
        return 1;
    }

    public function dummy4()
    {
        return 1;
    }

    public function dummy5()
    {
        return 1;
    }

    public function dummy6()
    {
        return 1;
    }

    public function dummy7()
    {
        return 1;
    }

    public function calculate($num)
    {
        return ($this->c1 * $this->c2) * $num;
    }
}