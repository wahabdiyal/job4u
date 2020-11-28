<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\JobRegister;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=JobRegister::where('company_id',session()->get('emply')->id)->paginate(4);
        if($a){
            return view('employee.jobs')->with('jobs',$a);
        }else{
            return view('employee.jobs')->with('jobs',null);
        } 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  registerCompany(Request $request)
    {
         $emply=Company::where('email','abc@abc.com')->where('password',md5('123456'))->first();

       if($emply){
                
                $request->session()->put('emply',$emply);
                return redirect('employee/jobs');

       }else{
        return redirect()->back()->withErrors(['Employee not found.']);
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkEmployee(Request $request)
    {
        $emply=Company::where('email',$request->email)->where('password',md5($request->pass))->first();

       if($emply){
                
                $request->session()->put('emply',$emply);
                return redirect('employee/jobs');

       }else{
        return redirect()->back()->withErrors(['Employee not found.']);
       }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
