<?php

interface Component
{
    public function operation();
}

class ConcretComponent implements Component
{
    public function operation()
    {
        return"ConcreteComponent operation";
    }
}
 abstract class Decorator implements Component
 {
     protected $component;

     public function __construct(Component $component)
     {
         $this->component = $component;
     }

     public function operation()
     {
         return $this->component->operation();
     }
 }

 $component = new ConcretComponent();
$decorator = new ConcretComponent()($component);
$result = $decorator->operation();