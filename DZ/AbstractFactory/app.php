<?php

use DZ\TvAbstractFactory;
use DZ\LedTv;
use DZ\LcdTv;
use DZ\SonyFactory;
use DZ\SonyLedTv;
use DZ\SonyLcdTv;
use DZ\LGFactory;
use DZ\LGLedTv;
use DZ\LGLcdTv;

// Создание фабрик
$sonyFactory = new SonyFactory();
$lgFactory = new LGFactory();

// Создание телевизоров через фабрики
$sonyLedTv = $sonyFactory->createLedTv();
$sonyLcdTv = $sonyFactory->createLcdTv();
$lgLedTv = $lgFactory->createLedTv();
$lgLcdTv = $lgFactory->createLcdTv();

// Использование телевизоров
$sonyLedTv->playVideo("Sample video on Sony LED TV");
$sonyLcdTv->displayImage("Sample image on Sony LCD TV");
$lgLedTv->playVideo("Sample video on LG LED TV");
$lgLcdTv->displayImage("Sample image on LG LCD TV");
