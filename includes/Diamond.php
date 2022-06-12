<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;


class Diamond extends Shape
{

// Extend the Shape class to create a diamond that works with any passed length.


    public function __construct($length = 10)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }


    public function displayName()
    {
        echo $this->name;
    }




    public function draw()
    {

        $n = $this->sideLength;
        echo "<pre>"; //a trick to make the diamond regular
        for ($i = 1; $i < $n; $i++)
        {
            for ($j = $i; $j < $n; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }

        for ($i = $n; $i > 0; $i--)
        {
            for ($j = $n - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        echo "</pre>";

    }
}






