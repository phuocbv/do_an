<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\SemesterRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Manage internship
 *
 * Class ManageInternshipController
 * @package App\Http\Controllers\Admin
 */
class ManageInternshipController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $semesterRepository;

    public function __construct(SemesterRepositoryInterface $semesterRepository)
    {
        $this->semesterRepository = $semesterRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getListInternship()
    {
        return 'ok';
    }

    /**
     * get list plan study
     * @return $this
     */
    public function getListPlanStudy()
    {
        $listSemester = $this->semesterRepository->all();

        return view('admin.manage-internship.plan-study')->with([
            'listSemester' => $listSemester
        ]);
    }
}
