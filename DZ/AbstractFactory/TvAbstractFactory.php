<?php

// namespace TvAbstractFactory;

interface TvAbstractFactory
{
    public function createLedTv(): LedTv;
    public function createLcdTv(): LcdTv;
}
