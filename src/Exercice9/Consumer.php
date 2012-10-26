<?php

namespace Exercice9;

class Consumer
{
    /**
     * @var \Exercice9\Component
     */
    private $component;

    public function consume()
    {
        $result = $this->component
            ->get('algo')
            ->applauseTo('Alguien')
            ->abuchearTo('Basuras')
            ->result()
        ;

        return strrev($result);
    }
}