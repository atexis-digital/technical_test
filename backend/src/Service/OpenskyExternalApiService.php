<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class OpenskyExternalApiService
{

    /**
     * @throws GuzzleException
     */
    public function getArrivals(
        string $airport,
        int    $from,
        int    $to
    )
    {


    }

    public function getClient(): Client
    {

    }
}