<?php
interface Target
{
    public function request();
}

class Adaptee
{
    public function especificRequest()
    {
        return "Adapte's request";
    }
}

class Adapter implements Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return $this->adaptee->especificRequest();
    }
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
$result = $adapter->request();