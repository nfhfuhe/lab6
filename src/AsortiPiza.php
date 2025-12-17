<?php

namespace lab6;

use User\PizaLibrari\Piza;

class AsortiPiza extends Piza
{
    public function __construct()
    {
        $this->name = "Пица Асорти";
        $this->sause = "Томатный соус";
        $this->topings[] = "Сервелат";
        $this->topings[] = "Пармезан";
        $this->topings[] = "Молочная колбоса";
        $this->topings[] = "Охотничьи колбаски";
    }
}
