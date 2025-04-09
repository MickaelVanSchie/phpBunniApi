<?php

class Project {
    public $id;
    public $color;
    public $name;

    public function __construct(int $id, string $color, string $name) {
        $this->id = $id;
        $this->color = $color;
        $this->name = $name;
    }
}