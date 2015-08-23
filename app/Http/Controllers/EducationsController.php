<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AddEducationRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Educations\EducationRepositoryInterface;

class EducationsController extends Controller
{

    protected $currentUser;
    protected $education;

    public function __construct(EducationRepositoryInterface $education)
    {
        $this->middleware('auth');
        $this->currentUser = Auth::user();
        $this->education = $education;
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
     * @param  AddEducationRequest  $request
     * @return Response
     */
    public function store(AddEducationRequest $request)
    {
        $data = [
            'degree'            => $request->degree,
            'specialization'    => $request->specialization,
            'institute'         => $request->institute,
            'yearOfCompletion'  => $request->yearOfCompletion
            ];

        $this->education->store($this->currentUser, $data);

        flash()->success('Yey!', 'New education has been added.');

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
    public function update(AddEducationRequest $request, $id)
    {
        $data = [
            'degree'            => $request->degree,
            'specialization'    => $request->specialization,
            'institute'         => $request->institute,
            'yearOfCompletion'  => $request->yearOfCompletion
            ];

        $this->education->update($id, $data);

        flash()->success('Yey!', 'Education has been added.');

        return redirect()->route('profile.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->education->destroy($id);

        flash()->info('Yay!', 'Education has been success removed.');

        return redirect()->route('profile.index');
    }
}
