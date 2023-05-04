<?php

class ValueObject {
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
        if ($color instanceof ValueObject &&

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
        return new ValueObject($red, $green, $blue);
    }

    public function mix($color) {
        if (!($color instanceof ValueObject)) {
            throw new InvalidArgumentException("Invalid color");
        }
        $red = round(($this->red + $color->getRed()) / 2);
        $green = round(($this->green + $color->getGreen()) / 2);
        $blue = round(($this->blue + $color->getBlue()) / 2);
        return new ValueObject($red, $green, $blue);
    }

}

$color = new ValueObject(100, 200, 100);
$color_1 = new ValueObject(200, 155, 95);
// var_dump($color->equals($color_1));
echo $color->equals($color_1);
