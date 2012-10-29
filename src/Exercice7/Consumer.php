<?php

namespace Exercice7;

class Consumer
{
    /**
     * @var \Exercice7\Sum
     */
    private $sum;

    public function __construct(\Exercice7\Sum $sum)
    {
        $this->sum = $sum;
    }

    public function consume($addend, $augend)
    {
        return $this->sum->sum($addend, $augend) + $this->sum->sum($addend + 1, $augend + 1);
    }
}