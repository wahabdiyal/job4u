<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use App\Models\SubmitCv;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Schedule;

class SubmitCvController extends Controller
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
    public function candidates(Request $request,$id)
    {
          $user= User::join('submit_cvs','submit_cvs.user_id','=','users.id')->join('job_registers','job_registers.id','=','submit_cvs.job_register_id')->where('job_registers.company_id',session()->get('emply')['id'])->where('submit_cvs.job_register_id',$id)->select('users.*','submit_cvs.status AS jobStatus','submit_cvs.id AS cvid','submit_cvs.created_at AS requestTime','job_registers.id AS jobId','job_registers.candidate AS cnd')->get();

     return view('employee.candidates')->with('users',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function candidate($user_id,$job_id){
       
       $user =   User::where('id',$user_id)->with('experiences','skills','education','skill_detail','summary','heading')->first();
    return view('employee.candidate')
    ->with('user',$user)
    ->with('job',JobRegister::join('submit_cvs','submit_cvs.job_register_id','=','job_registers.id')->where('job_registers.id',$job_id)->select('job_registers.*','submit_cvs.candidate_note','submit_cvs.id AS cvid','submit_cvs.status AS cvstatus')->first())
    ->with('schedule',Schedule::where('user_id',$user_id)->where('job_register_id',$job_id)->where('company_id',session()->get('emply')['id'])->get());
  }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubmitCv  $submitCv
     * @return \Illuminate\Http\Response
     */
    public function updateStatus($job_id,$submitCv)
    {
        $job = SubmitCv::find($job_id);
        if ($job) {
            $job->update(['status'=>$submitCv]);
        }
        return redirect()->back();
    }
     public function updateStatusAjax(Request $request)
    {
        $job = SubmitCv::find($request->id);
        if ($job) {
            $job->update(['status'=>$request->status]);
            return true;
        }
        return false;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubmitCv  $submitCv
     * @return \Illuminate\Http\Response
     */
    public function edit(SubmitCv $submitCv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubmitCv  $submitCv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubmitCv $submitCv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubmitCv  $submitCv
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubmitCv $submitCv)
    {
        //
    }
}
