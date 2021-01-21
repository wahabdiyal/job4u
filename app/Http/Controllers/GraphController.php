<?php

namespace App\Http\Controllers;
use App\Models\JobRegister;
use App\Models\Industry;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = Industry::all();
       
        $job=[];
        foreach ($industry as $key => $value) {

             $job['total']=JobRegister::where('industry',$value->name)->count();
             $job['name']=$value->name;
             $job_bar[]=$job;

        }

        $company=[];
        foreach ($industry as $value) {

             $company['total']=Company::where('company_type',$value->name)->count();
             $company['name']=$value->name;
             $company_bar[]=$company;

        }
        $data['company_bar']=$company_bar;

        $gender['male']=User::where('gender','male')->count();
        $gender['female']=User::where('gender','female')->count();
        $candidate['Student']=User::where('candidate_note','Student')->count();
        $candidate['Trainer']=User::where('candidate_note','Trainer')->count();
        $candidate['Job_Seeker']=User::where('candidate_note','Job Seeker')->count();
        $candidate['Handicap']=User::where('candidate_note','Handicap')->count();
        $candidate['Apprentice']=User::where('candidate_note','Apprentice')->count();
        $candidate['Subsidized']=User::where('candidate_note','Subsidized Contract')->count();
        $data['candidate_note_bar'] =$candidate;
        $data['pic']=$gender;

        $data['job_bar']=$job_bar;

        
        return $data;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
