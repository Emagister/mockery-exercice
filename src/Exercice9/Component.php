<?php

namespace Exercice9;

class Component
{
    public function get($something)
    {
        return $this;
    }

    public function applauseTo($someone)
    {
        return $this;
    }

    public function abuchearTo($someone)
    {
        return $this;
    }

    public function result()
    {
        return 'TEST OK!';
    }
}