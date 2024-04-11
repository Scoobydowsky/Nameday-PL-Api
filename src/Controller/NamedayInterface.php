<?php

namespace App\Controller;

interface NamedayInterface
{
    public function getNamedaysToday();
    public function getNamedaysThisWeek();
    public function getNamedaysSpecificDay(string $day , string $month);
}