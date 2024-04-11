<?php

namespace App\Service;

use DateTime;

interface SearchInterface
{
    public function searchByDate(DateTime $date);

}