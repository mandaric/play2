<?php

/**
 * Print a list from 1 to 100
 * If the number can be divided by 3 print `Fizz`
 * If the number can be divided by 5 print `Buzz`
 * If the number can be divided by 3 and 5 print `FizzBuzz`
 * Else print the number
 */

// Version 1
for ($i = 1; $i <= 100; $i++)
{
    if ($i % 3 == 0 && $i % 5 == 0)
    {
        echo 'FizzBuzz<br />';
    }
    else if ($i % 3 == 0)
    {
        echo 'Fizz<br />';
    }
    else if ($i % 5 == 0)
    {
        echo 'Buzz<br />';
    }
    else
    {
        echo $i . '<br />';
    }
}

// Version 2
for ($i = 1; $i <= 100; ++$i)
{
    $output = null;

    if ($i % 3 == 0)
    {
        $output .= 'Fizz';
    }

    if ($i % 5 == 0)
    {
        $output .= 'Buzz';
    }

    echo (($output == null) ? $i : $output) . "<br />";
}

// Version 3
/**
 * FizzBuzz
 *
 * @param int    $t    Amount of times
 * @param int    $mod1 The first modulator
 * @param int    $mod2 The second modulator
 * @param string $out1 The first output
 * @param string $out2 The second output
 *
 * @return array The result
 */
function fizzbuzz($t = 100, $mod1 = 3, $mod2 = 5, $out1 = 'Fizz', $out2 = 'Buzz')
{
    $result = [];

    for ($i = 1; $i <= $t; ++$i)
    {
        $output = null;

        if ($i % $mod1 == 0)
        {
            $output .= $out1;
        }

        if ($i % $mod2 == 0)
        {
            $output .= $out2;
        }

        $result[] = (($output == null) ? $i : $output);
    }

    return $result;
}

$values = fizzbuzz(1000, 5, 9, 'Woof', 'Blaa');

foreach ($values as $value)
{
    echo $value . '<br />';
}