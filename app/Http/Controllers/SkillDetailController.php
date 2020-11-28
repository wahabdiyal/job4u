<?php

namespace App\Http\Controllers;

use App\Models\SkillDetail;
use App\Models\User;
use Illuminate\Http\Request;

class SkillDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillDetail  $skillDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SkillDetail $skillDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillDetail  $skillDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillDetail $skillDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillDetail  $skillDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->skill_detail()->update(['body'=>$request->input('itskill')]);

         return redirect()->back();
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillDetail  $skillDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillDetail $skillDetail)
    {
        //
    }
}
