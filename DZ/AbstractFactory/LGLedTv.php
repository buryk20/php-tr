<?php

require_once 'LcdTv.php';

class LGLedTv implements LedTv
{
    public function playVideo(string $video)
    {
        echo "Playing video on LG LED TV: $video\n";
    }
}
