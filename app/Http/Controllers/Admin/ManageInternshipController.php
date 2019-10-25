<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\SemesterRepositoryInterface;
use App\Semester;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Datatables;

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

    /**
     * get data list plant study by param in data table
     *
     *
     * @return mixed
     */
    public function getDataListPlanStudy(Request $request)
    {
        $data = $request->only('to', 'from');

//        return json_encode($data);

        $start =Carbon::now();

        Log::info($start->format('Y-m-d H:i:s'));

        $result = datatables()->of(Semester::query())->make(true);

        Log::info(Carbon::now()->format('Y-m-d H:i:s'));

        return $result;
    }

    /**
     * view list plan study
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getViewListPlanStudy()
    {
        return view('admin.manage-internship.plan-study');
    }
}
