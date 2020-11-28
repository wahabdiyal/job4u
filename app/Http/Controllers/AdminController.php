<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
         // $this->
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companyRequests()
    {
         $companies = Company::all();
         return view('admin.company_request')->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companyStatus($id)
    {
         Company::find($id)->update(['active_deactive'=>'active']);
         return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function companyEdit(Request $request,$id)
    {

       Company::find($id)->update($request->all());
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function companyDisplayDetail($company_id)
    {
        $company = Company::find($company_id);

         return view('admin.getViewDetailOfCompany')->with('company',$company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function companyPageForEdit($id)
    {
        $company = Company::find($id);
         return view('admin.editCompany')->with('company',$company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function companyDelete($company_id)
    {
         $company=Company::find($company_id)->delete();
         return redirect()->back();
    }
}
