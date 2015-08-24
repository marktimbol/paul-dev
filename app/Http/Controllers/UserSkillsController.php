<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AddUserSkillRequest;
use App\Repositories\Users\Skills\UserSkillRepositoryInterface;
use Illuminate\Support\Facades\Auth as Auth;

class UserSkillsController extends Controller
{

    protected $currentUser;
    protected $userSkill;

    public function __construct(UserSkillRepositoryInterface $userSkill)
    {
        $this->middleware('auth');
        $this->currentUser = Auth::user();
        $this->userSkill = $userSkill;
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
     * @param  AddSkillRequest  $request
     * @return Response
     */
    public function store(AddUserSkillRequest $request)
    {
        $data = [
            'title' => $request->title,
            'years_of_experience' => $request->years_of_experience,
            'description'   => $request->description
            ];

        $this->userSkill->store($this->currentUser, $data);

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
    public function update(AddUserSkillRequest $request, $id)
    {
        $data = [
            'title'                 => $request->title,
            'years_of_experience'   => $request->years_of_experience,
            'description'           => $request->description
            ];

        $this->userSkill->update($id, $data);

        flash()->success('Yey!', 'Skill has been added.');

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
        $this->userSkill->destroy($id);

        flash()->info('Yay!', 'Skill has been success removed.');

        return redirect()->route('profile.index');
    }
}
