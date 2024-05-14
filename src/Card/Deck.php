<?php

namespace App\Card;

Class Deck
{
    protected $deck = [];
    protected $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    protected $suites = ['♦', '♥', '☘', '♠'];

    public function __construct()
    {
        foreach ($this->suites as $suite) {
            foreach ($this->values as $value) {
                $this->deck[] = $value . $suite;
            }
        }
    }

    public function getDeck(): array
    {
        return $this->deck;
    }

    // public function getString(): string
    // {
    //     return implode;
    // }
}