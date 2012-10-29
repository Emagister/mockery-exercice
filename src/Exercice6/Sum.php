<?php

namespace Exercice6;

class Sum
{
    /**
     * @var \Exercice6\SuperSum
     */
    private $superSum;

    public function __construct(\Exercice6\SuperSum $superSum)
    {
        $this->superSum = $superSum;
    }

    public function checkSuperSum($number)
    {
        return ($this->superSum->sum($number) == $number + 1);
    }
}