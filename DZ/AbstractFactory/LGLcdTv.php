<?php

require_once 'LcdTv.php';

// use LcdTv\LcdTv;

class LGLcdTv implements LcdTv
{
    public function displayImage(string $image)
    {
        echo "Displaying image on LG LCD TV: $image\n";
    }
}
