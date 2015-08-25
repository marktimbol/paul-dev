<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Skills\Categories\SkillCategoryRepositoryInterface;
use Illuminate\Http\Request;

class SkillCategoriesController extends Controller
{

    protected $skillCategories;

    public function __construct(SkillCategoryRepositoryInterface $skillCategories)
    {
        $this->middleware('auth');
        $this->skillCategories = $skillCategories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->skillCategories->all();
        return view('admin.pages.skill-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.skill-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|min:2'
        ]);

        $data = [
            'name'  => $request->name
        ];

        $this->skillCategories->store($data);

        flash()->success('Yay!', 'New Skill Category has been added.');

        return redirect()->route('admin.skill-categories.index');
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
        $this->validate($request, [
            'name'  => 'required|min:2'
        ]);

        $this->skillCategories->update($id, $request->name);

        flash()->success('Yay!', 'Skill Category has been updated.');

        return redirect()->route('admin.skill-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->skillCategories->destroy($id);

        flash()->success('Yay!', 'Skill Category has been deleted.');

        return redirect()->route('admin.skill-categories.index');
    }
}
