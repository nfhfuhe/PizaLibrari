<?php

namespace user\PizaLibrary;

abstract class PizaStore
{
    protected abstract function createPiza(string $type);
    public function orderPiza(string $type)
    {
        $piza = $this->createPiza($type);
    }
}
