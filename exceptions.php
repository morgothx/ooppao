<?php

function divide($dividend, $divisor)
{
    if ($divisor == 0)
    {
        throw new Exception("División by zero");
    }

    if (!is_numeric($dividend) || !is_numeric($divisor))
    {
        throw new \http\Exception\InvalidArgumentException("Invalid input. Both dividend and divisor must be numeric");
    }

    if ($dividend % $divisor != 0)
    {
        throw new \http\Exception\RuntimeException("The result of the divison is not an interger.");
    }

    return $dividend / $divisor;
}

try
{
    echo divide(10, 0);
} catch (Exception $e)
{
    echo "Caught exception: " .$e->getMessage() . "\n";
}

try
{
    echo divide(20, 'a');
} catch (InvalidArgumentException $e)
{
    echo "Caught InvalidArgumentException :" . $e->getMessage() . "\n";
}

try
{
    echo divide(15, 7);
} catch (RuntimeException $e)
{
    echo "Caught RuntimeException: " . $e->getMessage() . "\n";
}