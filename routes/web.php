<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobRegisterController;
use App\Http\Controllers\SkillDetailController;
use App\Http\Controllers\SubmitCvController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Http\Request;
use App\Models\SubmitCv;


// Route::get('testforme/{name}',[UserController::class,'rand']);
/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you  can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/ 
 /*********************User route*************************/
Route::get('/', [UserController::class,'index']);

  Route::any('/search', [UserController::class,'searchJob']);

  Route::get('/searchdetail/{job_id}', [UserController::class,'searchJobDetail']);

  Route::get('/user/personal/{user_id}', [UserController::class,'personal']);
  Route::post('/user/personal/{user_id}', [UserController::class,'personalSave']);

  Route::get('/user/education/{user_id}', [UserController::class,'education']);
  Route::post('/user/education/{user_id}', [UserController::class,'educationSave']);
  Route::get('/user/education/del/{user_id}', [UserController::class,'educationDel']);

  Route::get('/user/experience/{user_id}', [UserController::class,'experience']);
  Route::post('/user/experience/{user_id}', [UserController::class,'experienceSave']);
  Route::get('/user/experience/del/{user_id}', [UserController::class,'experienceDel']);

  Route::get('/user/skill/{user_id}', [UserController::class,'skill']);
  Route::post('/user/skill/{user_id}', [UserController::class,'skillSave']);
  Route::get('/user/skill/del/{user_id}', [UserController::class,'skillDel']);

  Route::get('/user/education{user_id}', [UserController::class,'addUserData']);
  Route::get('/user/skills/{user_id}', [UserController::class,'addUserData']);

   Route::get('/user/industry', [UserController::class,'industryDetail']);
  Route::get('/login', function () {
    return view('index');
  });
  Route::get('/myjob/{id}',[UserController::class,'myjob']);
  Route::get('/addSaveJob/{job_id}/{user_id}',[UserController::class,'addSaveJob']);
  Route::get('/delSaveJob/{save_job_id}',[UserController::class,'delSaveJob']);

  Route::post('submituserdetail/{user_id}',[UserController::class,'userDetail']);
  Route::post('submitUserStudyDetail/{user_id}',[UserController::class,'submitUserStudyDetail']);

  
  Route::post('/login', [UserController::class,'userLogin']);

  Route::post('/register', [UserController::class,'userRegister']);

  Route::get('/profile/{id}',[UserController::class,'getProfileDetail']);

   Route::get('/addprofile',function(){
    return view('user.profileupdate');
  });

  Route::post('/profile/{user_id}',[UserController::class,'profileUpdate']);

  Route::get('/logout',function(){
    session()->forget('user');
    
    return redirect('/');
  });
////////////submit cv and on company ////////////////////////////////
  Route::post('submitCv',function(Request $request){
    $find = SubmitCv::where('company_id',$request->company_id)->where('user_id',$request->user_id)->where('job_register_id',$request->job_register_id)->first();
    if($find){
      // sleep(3);
      return json_encode(0);
    }
    $cv=SubmitCv::create($request->all());
   return json_encode($cv);
  });
  ///////////////////////pdf/////////////////////////////////////////
  Route::get('/downloadPDF/{id}',[UserController::class,'createPDF']);

/**********************Skills**********************************/

  Route::post('skill/update/{user_id}',[SkillController::class,'update']);


/*********************Heading***********************************/

  Route::post('heading/update/{user_id}',[UserController::class,'updateHeading']);


/***************************IT Skill*****************************/

  Route::post('skilldetail/update/{user_id}',[SkillDetailController::class,'update']);


/***************************Summary*****************************/
  Route::post('summary/update/{user_id}',[UserController::class,'updateSummary']);


/************************File of CV********************************/
 
  Route::post('file/update/{user_id}',[UserController::class,'updateFile']);



/********************Admin route**************************/
Route::get('/admin/login', function () {
    return view('admin.login');    
});
Route::post('/admin/login',[AdminController::class,'adminLogin']);


Route::group(['middleware' => ['Admin']], function () {


Route::get('/admin/main', [AdminController::class,'mainDashborad']);

        /**** *****company request for all*** ****/
        Route::get('/admin/company/requests',[AdminController::class,'companyRequests']);
        Route::get('/admin/company/status/{id}',[AdminController::class,'companyStatus']);
        Route::get('/admin/company/del/{id}',[AdminController::class,'companyDelete']);
        Route::get('/admin/company/detail/{id}',[AdminController::class,'companyDisplayDetail']);
        Route::post('/admin/company/edit/{id}',[AdminController::class,'companyEdit']);
        Route::get('/admin/company/edit/{id}',[AdminController::class,'companyPageForEdit']);
        /**********************************end requests***************************************/
        /**********************************Inductry***************************************/

        Route::get('admin/add_industry',[AdminController::class,'industry']);
        Route::get('admin/delIndustry/{industry_id}',[AdminController::class,'delindustry']);
        Route::post('admin/add_industry',[AdminController::class,'companyInductry']);
        /**********************************end industry***************************************/

        /**********************************Inductry***************************************/

        Route::get('admin/show_user',[AdminController::class,'userDetail']);
        // Route::get('admin/delIndustry/{industry_id}',[AdminController::class,'delindustry']);
        // Route::post('admin/add_industry',[AdminController::class,'companyInductry']);
        /**********************************end industry***************************************/
        /********************************** Users***************************************/
        Route::get('admin/user/del/{user_id}',[AdminController::class,'delUser']);
        /**********************************end User***************************************/

        /********************************** Job ***************************************/
        Route::get('admin/jobs',[AdminController::class,'jobs']);
        
        Route::get('admin/jobdetail/{job_id}',[AdminController::class,'jobDetail']);
        Route::post('admin/job/status',[AdminController::class,'jobStatusChange']);

        /**********************************end job***************************************/
        

Route::get('/admin/profile', function () {
    return view('admin.profile');    
});

Route::get('/admin/add_job', function () {
    return view('admin.addjob');    
});

Route::post('/admin/add_job',[AdminController::class,'store'])->name('comapany_add_job');
});

 Route::get('admin/logout',function(){
               
                session()->forget('admin');
                return redirect('/admin/login');
              });
/**********************End Admin Route**************************/



/**********************User Route**************************/
Route::get('/main', function () {
    return view('main')->with('users',App\Models\User::paginate(4));
})->name('main');

////////////////////////////////Employee//////////////////////////////////////
 
  Route::get('/employee/login',function(){
    return view('employee.login');
  });
  Route::get('/employee/register',function(){
    return view('employee.signup');
  });
Route::post('/employee/register',[CompanyController::class,'registerCompany']);
 
Route::post('/employee/login',[CompanyController::class,'checkEmployee']);

Route::group(['middleware' => ['Employee']], function () {


          Route::post('/employee/firstJobForm',function(Request $request){

            $request->session()->put('form1',$request->input());
            return redirect('/employee/jobpost/experience');
             });
            Route::post('/employee/firstJobForm2',function(Request $request){
              if(!$request->stripeToken){
                   return redirect()->back();
              }
              else{
                
                $stripe = new \Stripe\StripeClient('sk_test_51HIu6CIxbvT0WupdSG6Bg2huppPudVn2ez9ZOow94VNmxV7HTYRiJRidTQhvMvWxXUW7q8sIO8nY8l8GSMB6SfNI00hMvnAZ3o');
              $pay = $stripe->charges->create([
                'amount' => 9999,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Job Post Payment',
              ]);
              }
              
            $request->session()->put('form2',$request->input());
               
               if (!$pay->status) {
                  echo "<script>alert('payment is not submit');<\script>";
                  return redirect()->back();
               }


              $u = \App\Models\JobRegister::create(
                ['team_contact'=>$request->input('term_contract'),
                'employment_type'=>$request->input('employment_type'),
                'job_skill'=>session()->get('form1')['job_skill'],
                'industry'=>session()->get('form1')['industry'],
                'total_hire'=>session()->get('form1')['total_hire'],
                'remote'=>$request->input('remote'),
                'candidate'=>$request->input('candidate'),
                'experience'=>$request->input('experience'),
                 'salery'=>$request->input('start_salary')."-".$request->input('end_salary') ,
                 'job_title'=>session()->get('form1')['job_title'],
                 'city'=>session()->get('form1')['city'],
                 'company_id'=>session()->get('emply')['id'],
                  'payment_status'=>'Active',
                 'job_description'=>session()->get('form2')['job_description']]);
                return redirect('/employee/jobs');
             
             
              });

              Route::get('/employee/jobpost/experience',function(){
                       return view('employee.jobpostexperience');
              }); 
              Route::get('/employee/jobs',[CompanyController::class,'index']);
              Route::get('/employee/jobs/view/{job_id}', [CompanyController::class,'showJobDetail']);
  
             Route::get('/employee/jobpost/basic', function () {
             return view('employee.jobpost');
              });

                /**********************show detail of jobseeker**********************/
                 Route::get('/employee/candidate/{user_id}/{job_id}',[SubmitCvController::class,'candidate']);
                  Route::get('/employee/candidates/{job_id}',[SubmitCvController::class,'candidates']);
                  Route::get('/employee/candidates/{job_id}/{status}', [SubmitCvController::class,'updateStatus']);
                  Route::post('/employee/candidates/status', [SubmitCvController::class,'updateStatusAjax']);

                  /*******************************end*******************************/

                  //////////////////////change Job status////////////////////////
                  Route::post('employee/job/status', [CompanyController::class,'updateStatusJobAjax']);
      
                Route::get('employee/profile', [CompanyController::class,'profileCompany']);

                  /*******************************schedule interview*******************************/

                 Route::post('/employee/schedule',[ScheduleController::class,'index']);

                  /*******************************end*******************************/

               Route::get('employee/logout',function(){
               
                session()->forget('emply');
                return redirect('/');
              });

});