<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\NewsRepositoryInterface;
use App\Repositories\Contracts\SemesterRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository, SemesterRepositoryInterface $semesterRepository)
    {
        //$this->middleware('auth');
        $this->newsRepository = $newsRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listNews = $this->newsRepository->getListNews();

        return view('home')->with([
            'listNews' => $listNews
        ]);
    }

    public function getList()
    {
        return view()->with([

        ])->render();
    }
}
