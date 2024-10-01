<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealtzController
{
    #[Route('/healthz')]
    public function healthz(): JsonResponse
    {
        return new JsonResponse(['success' => true]);
    }
}
