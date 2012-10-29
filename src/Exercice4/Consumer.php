<?php

namespace Exercice4;

class Consumer
{
    public function consume(LargeClass $lc)
    {
        return $lc->calculate(5);
    }
}