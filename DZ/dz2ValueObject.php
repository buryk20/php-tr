<?php

class Color {
    private $red;
    private $green;
    private $blue;


    public function __construct($red, $green, $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
        // var_dump($red);
    }

    public function getRed() {
        return $this->red;
    }

    public function setRed($red) {
        if($red < 0 || $red > 255) {
            print('Це не валідний колір');
        } else {
            $this->red = $red;
        }
    }

    public function getGreen() {
        return $this->green;
    }

    public function setGreen($green) {
        if($green < 0 || $green > 255) {
            print('Це не валідний колір');
        } else {
            $this->green = $green;
        }
    }

    public function getBlue() {
        return $this->blue;
    }

    public function setBlue($blue) {
        if($blue < 0 || $blue > 255) {
            print('Це не валідний колір');
        } else {
            $this->blue = $blue;
        }
    }

    public function equals($color) {
        if ($color instanceof Color &&

            $color->getRed() == $this->red &&
            $color->getGreen() == $this->green &&
            $color->getBlue() == $this->blue) {
            return true;
        }
        return false;
    }

    public static function random() {
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        return new Color($red, $green, $blue);
    }

    public function mix($color) {
        $red = round(($this->red + $color->getRed()) / 2);
        $green = round(($this->green + $color->getGreen()) / 2);
        $blue = round(($this->blue + $color->getBlue()) / 2);
        return new Color($red, $green, $blue);
    }

}

$color = new Color(200, 200, 200);
$color_1 = new Color(100, 100, 100);
// var_dump($color->equals($color_1));
// var_dump($color->mix($color_1));
// var_dump($color->random($color_1));
$mixedColor = $color->mix($color_1);
var_dump($mixedColor->getRed());
var_dump($mixedColor->getGreen());
var_dump($mixedColor->getBlue());