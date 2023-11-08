<?php

namespace App\Services;

class LatestNews
{
    protected $client, $url;

    public function __construct()
    {
        $this->client = new RequestAPI();
        $this->url = env('NEWS_API');
    }

    public function getLatest()
    {
        $query = [
            'q' => 'programming',
            'sortBy' => 'popularity',
            'to' => date('Y-m-d'),
            'pageSize' => 4,
        ];

        return $this->client->authenticateGet($this->url . '/everything', $query);
    }

    public function getTopLates()
    {
        $query = [
            'country' => 'us',
            'pageSize' => 1
        ];

        return $this->client->authenticateGet($this->url . '/top-headlines', $query);
    }

    public function getPopular()
    {
        $query = [
            'q' => 'programming',
            'sortBy' => 'popularity',
            'pageSize' => 12,
        ];

        return $this->client->authenticateGet($this->url . '/everything', $query);
    }
}
