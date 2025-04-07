<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class OpenskyExternalApiService
{
    const FLIGHTS_ARRIVAL_ENDPOINT = "/api/flights/arrival";

    /**
     * @throws GuzzleException
     */
    public function getArrivals(
        string $airport,
        int    $from,
        int    $to
    )
    {
        // TODO call API and return json_decode

    }

    public function getClient(): Client
    {
        $client = new Client([
            'base_uri' => 'https://opensky-network.org'
        ]);
        return $client;
    }
}