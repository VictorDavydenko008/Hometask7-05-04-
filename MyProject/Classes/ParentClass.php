<?php

    namespace Prog\Myproject\Classes;

    use Prog\Myproject\Classes\Interfaces\MainInterface;

    class ParentClass implements MainInterface {
        public string $name;
        public string $color;
        public function __construct($name = 'Strawberries', $color = 'red') {
            $this->name = $name;
            $this->color = $color;
        }
        public function Intro() {
            echo "{$this->name} are {$this->color}.";
        }
        public function TellYourName() {
            echo "Roberto";
        }
    }
