<?php

namespace lab6;

use lab6\GawaiPiza;
use lab6\AsortiPiza;
use lab6\PeperoniPiza;
use User\PizaLibrari\Piza;
use User\PizaLibrari\PizaStore;

class DodoPizaStore extends PizaStore
{
    public function createPiza(string $type): object
    {
        switch ($type) {
            case 'gawai':
                return new GawaiPiza();
            case 'asorti':
                return new AsortiPiza();
            case 'peperoni':
                return new PeperoniPiza();
        }
    }
}