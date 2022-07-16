<?php

namespace App\Http\Controller\HealthCheck;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HealthCheckGetController
{
    #[Route('/health-check')]
    public function number()
    {
     return new JsonResponse(['status' => 'ok']);
    }
}
