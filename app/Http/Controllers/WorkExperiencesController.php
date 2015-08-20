<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Experiences\WorkExperienceRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperiencesController extends Controller
{

    protected $currentUser;
    protected $workExperience;

    public function __construct(WorkExperienceRepositoryInterface $workExperience)
    {
        $this->middleware('auth');
        $this->currentUser = Auth::user();
        $this->workExperience = $workExperience;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = [
            'companyName'   => $request->companyName,
            'website'       => $request->website,
            'startDate'     => $request->startDate,
            'endDate'       => $request->endDate,
            'description'   => $request->description,
            'isPresent'     => $request->has('isPresent')
            ];

        dd($data);

        $this->workExperience->store($this->currentUser, $data);

        flash()->success('Yey!', 'New experience has been added.');

       return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->workExperience->destroy($id);

        flash()->info('Yay!', 'Work Experience has been success removed.');

        return redirect()->route('profile.index');        
    }
}
