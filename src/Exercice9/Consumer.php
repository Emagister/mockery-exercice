<?php

namespace Exercice9;

class Consumer
{
    /**
     * @var \Exercice9\Component
     */
    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function consume()
    {
        return strrev(
            $this->component
            ->abuchearMaximamente()
            ->paraLuegoNoPoderPararDeAplaudir()
            ->yAcabarConManosRojas()
            ->yLagrimilla()
            ->paraObtener()
        );
    }
}