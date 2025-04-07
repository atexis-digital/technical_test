<?php

namespace App\Controller;

use App\Dto\FlightParamsDto;
use App\UseCases\FetchArrivalByAirportUseCase;
use FOS\RestBundle\Controller\Annotations\Route;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class FlightController extends ApiAbstractController
{
    /**
     * @throws GuzzleException
     */
    #[Route("/fetchArrivals")]
    #[Security("is_authenticated()")]
    public function fetchEveryArrival(
        Request                      $request,
        FetchArrivalByAirportUseCase $arrivalByAirportUseCase
    ): JsonResponse
    {

        // TODO make it work !
    }

    private function extractParamsFromRequest(Request $request): array
    {

    }


}