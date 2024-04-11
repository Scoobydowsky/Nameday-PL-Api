<?php

namespace App\Controller;

interface NamedayInterface
{
    public function getNamedaysToday();
    public function getNamedaysSpecificDay(string $day , string $month);
}