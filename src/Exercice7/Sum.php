<?php

namespace Exercice7;

class Sum
{
    /**
     * @var int
     */
    private $iteration = 1;

    public function sum($addend, $augend)
    {
        return ($addend + $augend) + $this->iteration++;
    }
}