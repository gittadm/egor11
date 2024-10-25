<?php

namespace App\Tasks;

class Task1
{
    //private string $text;
    public function __construct(private string $text)
    {
        //$this->text = $text;
    }

    public function run()
    {
        return $this->text . '...';
    }
}
