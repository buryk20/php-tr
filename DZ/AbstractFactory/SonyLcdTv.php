<?php

require_once 'LcdTv.php';

class SonyLcdTv implements LcdTv
{
    public function displayImage(string $image)
    {
        echo "Displaying image on Sony LCD TV: $image\n";
    }
}
