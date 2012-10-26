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

    public function sum($number)
    {
        return $this->superSum->sum($number);
    }
}