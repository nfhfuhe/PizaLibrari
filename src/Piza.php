<?php

namespace user\PizaLibrary;

class Piza
{
    protected string $name;
    protected string $sause;
    protected array $topings;
    public function sayTopings(): void
    {
        foreach ($this->topings as $toping) {
            echo  $toping . " ";
        }
    }
    public function prepare(): void
    {
        echo "Началась готовка пицы " . $this->name . PHP_EOL;
        echo "Добавлен соус " . $this->sause . PHP_EOL;
        echo "Добавлены топики ";
        $this->sayTopings();
    }
    public function cut(): void
    {
        echo "Даную пицу режут по диоганали ";
    }
}
