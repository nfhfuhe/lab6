<?php

namespace lab6;

use User\PizaLibrari\Piza;

class GawaiPiza extends Piza
{
    public function __construct()
    {
        $this->name = "Гавайская пица";
        $this->sause = "Томатный соус";
        $this->topings[] = "Курица";
        $this->topings[] = "Пармезан";
        $this->topings[] = "Ананасы";
    }
}
