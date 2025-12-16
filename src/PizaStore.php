<?php

namespace user\PizaLibrary;
use user\PizaLibrary\Piza;
abstract class PizaStore
{
    protected abstract function createPiza(string $type);

    public function orderPiza(string $type) 
    {
        $piza = $this->createPiza($type);
        $piza->prepare();
        $piza->cut();
        return $piza;
    }
}
