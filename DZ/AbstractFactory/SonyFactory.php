<?php

require_once 'TvAbstractFactory.php';
require_once 'SonyLedTv.php';
require_once 'SonyLcdTv.php';
require_once 'LedTvInterface.php';
require_once 'LcdTvInterface.php';

use LedTv\SonyLedTv;
use LedTv\SonyLcdTv;
use LedTv\LedTvInterface;
use LedTv\LcdTvInterface;

class SonyFactory implements TvAbstractFactory
{
    public function createLedTv(): LedTvInterface
    {
        return new SonyLedTv();
    }

    public function createLcdTv(): LcdTvInterface
    {
        return new SonyLcdTv();
    }
}




