<?php

class Calculator {
    public $operator;
    public $number_one;
    public $number_two;

    public function __construct(string $action, int $n_one, int $n_two) {
        $this->operator = $action;
        $this->number_one = $n_one;
        $this->number_two = $n_two;
    }

    public function calculate() {
        switch($this->operator) {
            case 'Addition':
                $result = $this->number_one + $this->number_two;
                return $result;
                break;
            case 'Subtraction':
                $result = $this->number_one - $this->number_two;
                return $result;
                break;
            case 'Multiplication':
                $result = $this->number_one * $this->number_two;
                return $result;
                break;
            case 'Division':
                $result = $this->number_one / $this->number_two;
                return $result;
                break;
            default:
                echo 'Please check if you completed all of the fields';
                break;
        }
    }
}