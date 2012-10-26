<?php

class Consumer
{
    /**
     * @var \Exercice8\Transformer
     */
    private $transformer;

    function __construct(\Exercice8\Transformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function fromDeveloperToSysadmin(User $user)
    {
        $sysadmin = $this->transformer->transform($user);

        return $sysadmin->puppetizeAll();
    }
}