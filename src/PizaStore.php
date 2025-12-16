<?php

namespace user\PizaLibrary;

class PizaStore
{
    public string $type;
    protected function createPiza(string $type): string
    {
        return $this->type;
    }

    public function orderPiza(string $type)
    {
        $piza = $this->createPiza($type);
    }
}
