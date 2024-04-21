<?php

class Product
{
    private $parts = [];

    public function addPart($part)
    {
        $this->parts[] = $part;
    }

    public function getParts()
    {
        return $this->parts;
    }
}

interface Builder
{
    public function builderPartA();
    public function builderPartB();
    public function getResult();
}

class ConcreteBuilder implements Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function builderPartA()

    {
        $this->product->addPart("Part A");
    }

    public function builderPartB()
    {
        $this->product->addPart("Part B");
    }

    public function getResult()
    {
        return $this->product;
    }
}

class Director
{
    public function construct(Builder $builder)
    {
        $builder->builderPartA();
        $builder->builderPartB();
    }
}

$builder = new ConcreteBuilder();
$director = new Director();
$director -> construct($builder);
$prodcut = $builder->getResult();
print_r($prodcut->getParts());