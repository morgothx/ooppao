<?php

interface Prototype
{
    public function makeClone();
}

class ConcretePrototype implements Prototype
{
    private $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    public function makeClone()
    {
        return new ConcretePrototype($this->property);
    }
}

$prototype = new ConcretePrototype('example');
$clone = $prototype->makeClone();