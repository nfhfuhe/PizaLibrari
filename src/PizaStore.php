<?php

namespace user\PizaLibrary;


class PizaStore
{
    protected function createPiza(string $type): object{
        return $this;
    }

    public function orderPiza(string $type)
    {
        $piza = $this->createPiza($type);
        $piza->prepare();
        $piza->cut();
        return $piza;
    }
}
