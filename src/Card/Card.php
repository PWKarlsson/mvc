<?php

namespace App\Card;

class Card
{
    // protected $value = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    // protected $suite = ['♦', '♥', '☘', '♠'];
    // private $card;
    protected $value;
    protected $suite;

    public function __construct()
    {
        $this->value = null;
        $this->suite = null;
        // $this->card = "[{$value} {$suit}]";
    }

    public function draw(): string
    {
        $this->value = array_rand(['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'], 1);
        $this->suite = array_rand(['♦', '♥', '☘', '♠'], 1);
        return $this->value . $this->suite;
    }

    public function getValue(): string
    {
        // $this->value = array_rand($value, 1);
        return ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'][$this->value];
    }

    public function getSuite(): string
    {
        return ['♦', '♥', '☘', '♠'][$this->suite];
    }

    public function getAsString(): string
    {
        return "[{$this->value}, {$this->suite}]";
    }
}