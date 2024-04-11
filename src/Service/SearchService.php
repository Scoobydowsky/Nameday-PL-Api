<?php

namespace App\Service;

use App\Service\SearchInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class SearchService implements SearchInterface
{
    private $jsonPatch;
    public function __construct(
        Private KernelInterface $kernel,
    )
    {
        $this->jsonPatch = $this->kernel->getProjectDir(). '/public/namedays/pl.json';
    }
    public function searchByDate(\DateTime $date)
    {
        $jsonContent = file_get_contents($this->jsonPatch);
        $jsonData = json_decode($jsonContent, true);
        if(isset($jsonData[$date->format('d-m')])){
            return json_encode($jsonData[$date->format('d-m')]['nameday']);
        }
        return null;
    }
}