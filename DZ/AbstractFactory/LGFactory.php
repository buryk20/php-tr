<?php



class LGFactory implements TvAbstractFactory
{
    public function createLedTv(): LedTv
    {
        return new LGLedTv();
    }

    public function createLcdTv(): LcdTv
    {
        return new LGLcdTv();
    }
}
