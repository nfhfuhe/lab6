<?php

namespace lab6;

use User\PizaLibrari\Piza;

class PeperoniPiza extends Piza
{
    public function __construct()
    {
        $this->name = "Пица Пепирони";
        $this->sause = "Острый томатный соус";
        $this->topings[] = "Пепперони";
        $this->topings[] = "Сыр";
    }
}
