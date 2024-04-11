<?php

namespace App\Service;

use DateTime;

interface SearchInterface
{
    public function searchByDate(DateTime $date);

    public function searchWeekByDate(DateTime $startDate, DateTime $endDate);
}