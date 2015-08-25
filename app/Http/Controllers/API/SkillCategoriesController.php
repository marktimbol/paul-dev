<?php

namespace App\Http\Controllers\API;

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
        return $this->skillCategories->all();       
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

        return $this->skillCategories->store($data);

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

        return $this->skillCategories->update($id, $request->name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //return 'ID is ' . $id;
        $this->skillCategories->destroy($id);

        return 'Deleted.';
    }
}
