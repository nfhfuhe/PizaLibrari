<?php

namespace User\PizaLibrari;


abstract class PizaStore
{
    protected abstract function createPiza(string $type): object;

    public function orderPiza(string $type)
    {
        $piza = $this->createPiza($type);
        $piza->prepare();
        $piza->cut();
        return $piza;
    }
}
