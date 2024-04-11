<?php

namespace App\Controller;

use App\Service\SearchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class NamedayController extends AbstractController implements NamedayInterface
{
    public function __construct(
        private SearchService $search,
    )
    {

    }

    #[Route('/today', name: 'todayNameday')]
    public function getNamedaysToday()
    {
        $today = new \DateTime();
        $today->format('d-m-Y');

        $json = $this->search->searchByDate($today);
        return new JsonResponse($json,200,[], true);
    }
}