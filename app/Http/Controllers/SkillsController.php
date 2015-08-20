<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Skills\SkillRepositoryInterface;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class SkillsController extends Controller
{

    protected $currentUser;
    protected $skill;

    public function __construct(SkillRepositoryInterface $skill)
    {
        $this->middleware('auth');
        $this->currentUser = Auth::user();
        $this->skill = $skill;
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
            'title' => $request->title,
            'years_of_experience' => $request->years_of_experience,
            'description'   => $request->description
            ];

        $this->skill->store($this->currentUser, $data);

        flash()->success('Yey!', 'New skill has been added.');

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->skill->destroy($id);

        flash()->info('Yay!', 'Skill has been success removed.');

        return redirect()->route('profile.index');
    }
}
