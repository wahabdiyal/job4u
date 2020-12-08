<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\JobRegister;
use App\Models\SubmitCv;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=JobRegister::where('company_id',session()->get('emply')->id)->orderBy('id', 'DESC')->paginate(4);
        if($a){
           
            return view('employee.jobs')->with('jobs',$a) ;
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
        // dd($request->input());
        $request->validate([
            "name" => 'required',
            "company_type" => 'required',
            "company_website" => 'required',
            "email" => 'unique:App\Models\Company,email',
            "password" => 'required',
            "address" => 'required',
            "mobile_number" => 'required',
            "company_country" => 'required',
            "company_number" => 'required',
            "detail" => 'required',
             
        ]);
        
            $emply=Company::create([
            "name" => $request->input('name'),
            "company_type" => $request->input('company_type'),
            "company_website" => $request->input('company_website'),
            "email" => $request->input('email'),
            "company_size" => $request->input('company_size'),
            "password" => $request->input('password'),
            "address" => $request->input('address'),
            "mobile_number" => $request->input('area_code').$request->input('mobile_number'),
            "company_country" => $request->input('company_country'),
            "company_number" => $request->input('company_number'),
            "detail" => $request->input('detail'),
            "active_deactive" => 'active',
            "registration_date" => now(),
            ]);
         
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
