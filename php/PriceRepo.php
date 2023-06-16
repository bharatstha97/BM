<?php

class PriceRepo
{

    public $lists = [
        1 => 100,
        2 => 200,
        3 => 130,
        4 => 566
    ];
    public function __invoke()
    {
    }

    public function getGreaterPrice()
    {
        if (isset($_GET['threshold']) && is_numeric($_GET['threshold'])) {
            return array_filter($this->lists, function ($list) {
                return $list > $_GET['threshold'] ? $list : null;
            });
        } else {
            return 'provide price threshold filter';
        }
    }

    public function getSumPrice()
    {
        return array_sum($this->getGreaterPrice());
    }
}
