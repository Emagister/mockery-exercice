<?php

namespace Exercice3;

class Consumer
{
    public function run($object)
    {
        $aggregate = '';
        foreach ($object as $key => $value) {
            $aggregate .= $value;
        }

        $aggregate .= $object['test'];

        return $object->process($aggregate);
    }
}