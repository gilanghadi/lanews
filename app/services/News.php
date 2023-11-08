<?php

namespace App\Services;

class News
{
    protected $client, $url;

    public function __construct()
    {
        $this->client = new RequestAPI();
        $this->url = env('NEWS_API');
    }

    public function getAllNews() // /v2/everything
    {
        $query = [
            'q' => 'business',
            'sortBy' => 'relevancy',
            'pageSize' => 15,
        ];

        return $this->client->authenticateGet($this->url . '/everything', $query);
    }

    public function getNewsContentEverything($request)
    {
        $query = [
            'q' => $request->category ?? 'technology',
            'language' => $request->language ?? '',
            'sortBy' => $request->sortBy ?? '',
            'from' => $request->from ?? '',
            'to' => $request->to ?? ''
        ];

        return $this->client->authenticateGet($this->url . '/everything', $query);
    }

    public function getNewsContentTopHeadlines($request)
    {
        $query = [
            'category' => $request->category ?? '',
            'country' => $request->country ?? '',
        ];

        return $this->client->authenticateGet($this->url . '/top-headlines', $query);
    }

    public function getAllNewsEverything($request) // /v2/everything
    {
        $query = [
            'q' => $request->q ?? 'bitcoin',
            'sortBy' => $request->sortBy ?? 'relevancy',
            'language' => $request->language ?? 'en',
            'sortByDate' => $request->sortByDate ?? date('Y-m-d'),
        ];

        return $this->client->authenticateGet($this->url . '/everything', $query);
    }
}
