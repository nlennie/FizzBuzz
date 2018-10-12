<?php


class FizzBuzz
{
    private $fizzNumber = 3;
    private $buzzNumber = 5;

    public function fizzBuzzer($number)
    {
        if ($this->isDivisibleBy($number, $this->fizzNumber) && $this->isDivisibleBy($number, $this->buzzNumber)) {
            return "FizzBuzz";
        } elseif ($this->isDivisibleBy($number, $this->fizzNumber)) {
            return "Fizz";
        } elseif ($this->isDivisibleBy($number,$this->buzzNumber)) {
            return "Buzz";
        }
        return $number;
    }

    private function isDivisibleBy($number, $divisor)
    {
        return $number % $divisor == 0;
    }


}
