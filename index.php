<?php
class RGBColor {
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed() {
        return $this->red;
    }

    public function setRed($value) {
        if ($value >= 0 && $value <= 255) {
            $this->red = $value;
        }
    }

    public function getGreen() {
        return $this->green;
    }

    public function setGreen($value) {
        if ($value >= 0 && $value <= 255) {
            $this->green = $value;
        }
    }

    public function getBlue() {
        return $this->blue;
    }

    public function setBlue($value) {
        if ($value >= 0 && $value <= 255) {
            $this->blue = $value;
        }
    }

    public static function random() {
        return new self(rand(0, 255), rand(0, 255), rand(0, 255));
    }

}


$randomColor = RGBColor::random();
echo "{$randomColor->getRed()}, {$randomColor->getGreen()}, {$randomColor->getBlue()}\n";


