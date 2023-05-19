<?php
interface Bird
{
    public function eat();

}

interface BirdFly extends Bird
{
    public function fly();
}

class Swallow implements BirdFly
{
    public function eat() { ... }
    public function fly() { ... }
}

class Ostrich implements Bird
{
    public function eat() { ... }
}