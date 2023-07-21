<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    // tidak bisa di overrride jika di php 8
    public function sampleFunction(string $name): string
    {
    }
}
