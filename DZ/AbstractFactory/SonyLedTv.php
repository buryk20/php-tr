<?php

namespace LedTv;

require_once 'LedTvInterface.php';

class SonyLedTv implements LedTvInterface
{
    public function playVideo(string $video)
    {
        echo "Playing video on Sony LED TV: $video\n";
    }
}