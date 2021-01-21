<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\JobRegister;
use App\Models\Industry;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function industry()
    {
         return view('admin.add_industry')->with('industries',Industry::all()); 
    }
    /**
     * Add Inductry a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function companyInductry(Request $request)
    {
         
         if($request->image)
            {
                $image1 = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('industry'), $image1);
                $img =url('industry').'/'.$image1;
            }
         Industry::create(['name'=>$request->input('name'),'image'=>$img]);
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

           
            if($request->active_deactive){
                $request->merge(['active_deactive'=>'active']);
            }else{
                $request->merge(['active_deactive'=>'deactive']);

            }
         Company::find($id)->update($request->all());
          return redirect('admin/company/requests');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userDetail()
    {
        return view('admin.show_users')->with('users',User::all());
      
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
    public function delindustry($industry_id)
    {
        $industry = Industry::findOrFail($industry_id);
         if ($industry) {
             $industry->delete();
             return redirect()->back();
         }else{

             return redirect()->back();
         }
    }
     /**
     * Delete the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function delUser($user_id)
    {
        $user = User::findOrFail($user_id);
         if ($user) {
             $user->delete();
             return redirect()->back();
         }else{

             return redirect()->back();
         }
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
    /**
     * show  the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function jobs()
    {
          return view('admin.jobs')->with('jobs',JobRegister::all());
    }

    /**
     * show  the specified resource from storage.
     *
     * @param  \App\Models\Admin  $id
     * @return \Illuminate\Http\Response
     */
    public function jobDetail($id)
    {
        return view('admin.jobdetail')->with('search',JobRegister::where('id',$id)->with('company','skill')->first());
    }
    /**
     * jobStatus  the specified resource from storage.
     *
     * @param  \App\Models\Admin  $request
     * @return \Illuminate\Http\Response
     */
    public function jobStatusChange(Request $request)
    {
        $job=JobRegister::find($request->id);
        if ($job) {
            $job->update(['job_status'=>$request->status]);
            return true;
        }else{
            return false;
        }
    }
        public function mainDashborad(){
          return view('admin.main')->with('company',Company::count())->with('job',JobRegister::count())->with('user',User::count()); 
    }

    public function adminLogin(Request $request)
    {
        $admin = Admin::where('email',$request->email)->first();
        if(!$admin){
            return redirect()->back();
        }

        if(\Hash::check($request->password,$admin->password)){
             $request->session()->put('admin', $admin);

                return redirect('admin/main');
        }
        else{
            return redirect()->back();
         
            }
    }

    
}
