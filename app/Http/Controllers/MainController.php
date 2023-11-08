<?php

namespace App\Http\Controllers;

use App\Services\LatestNews;
use App\Services\News;
use App\Services\RequestAPI;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    protected $apiservice, $latestNews, $news;

    public function __construct()
    {
        $this->latestNews = new LatestNews();
        $this->apiservice = new RequestAPI();
        $this->news = new News();
    }

    public function index(Request $request)
    {
        if ($request->category) {
            $data['contentHasCategory'] = $this->news->getNewsContentTopHeadlines($request);
            return view('News.content', $data);
        } else {
            $data['latestNews'] = $this->latestNews->getLatest();
            $data['latestNewsTop'] = $this->latestNews->getTopLates();
            $data['popularNews'] = $this->latestNews->getPopular();
            $data['AllNews'] = $this->news->getAllNews();
            return view('News.index', $data);
        }
    }

    public function Allnews(Request $request)
    {
        $data['keyword'] = $request->q ?? null;
        $data['AllNewsEverything'] = $this->news->getAllNewsEverything($request);
        return view('News.allcontent', $data);
    }
}
