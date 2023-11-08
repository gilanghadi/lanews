<?php

namespace App\Services;

use GuzzleHttp\Client;

class RequestAPI
{
    protected $client;

    public function __construct()
    {
        $options = [
            'base_uri' => env('NEWS_API'),
            'timeout'  => 99999,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ];
        $this->client = new Client($options);
    }

    public function get($path, $query = [])
    {

        $response = $this->client->request('GET', $path, [
            'query' => $query
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function authenticateGet($path, $query = [])
    {
        $response = $this->client->request('GET', $path, [
            'query' => $query,
            'headers' => [
                'Authorization' => 'Bearer ' . env('TOKEN_API')
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
