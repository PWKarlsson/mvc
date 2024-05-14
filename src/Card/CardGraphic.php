<?php

namespace App\Card;

class CardGraphic extends Card
{
    private $hearts = ['🂱', '🂲', '🂳', '🂴', '🂵', '🂶', '🂷', '🂸', '🂹', '🂺', '🂻', '🂽','🂾'];
    private $diamonds = ['🃁', '🃂', '🃃', '🃄', '🃅', '🃆', '🃇', '🃈', '🃉', '🃊', '🃋', '🃍','🃎'];
    private $spades = ['🂡', '🂢', '🂣', '🂤', '🂥', '🂦', '🂧', '🂨', '🂩', '🂪', '🂫', '🂭','🂮'];
    private $clubs = ['🃑', '🃒', '🃓', '🃔', '🃕', '🃖', '🃗', '🃘', '🃙', '🃚', '🃛', '🃝', '🃞'];

    public function __construct()
    {
        parent::__construct();
    }

    public function getAsString(): string
    {
        if ($this->suite == 0) {
            return $this->diamonds[$this->value];
        } elseif ($this->suite == 1) {
            return $this->hearts[$this->value];
        } elseif ($this->suite == 2) {
            return $this->clubs[$this->value];
        } else {
            return $this->spades[$this->value];
        }
    }
}