<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobRegisterController;
use App\Http\Controllers\SkillDetailController;
use Illuminate\Http\Request;
use App\Models\SubmitCv;

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

Route::get('/admin/main', function () {
    return view('admin.main');    
});

        /**** *****company request for all*** ****/
        Route::get('/admin/company/requests',[AdminController::class,'companyRequests']);
        Route::get('/admin/company/status/{id}',[AdminController::class,'companyStatus']);
        Route::get('/admin/company/del/{id}',[AdminController::class,'companyDelete']);
        Route::get('/admin/company/detail/{id}',[AdminController::class,'companyDisplayDetail']);
        Route::post('/admin/company/edit/{id}',[AdminController::class,'companyEdit']);
        Route::get('/admin/company/edit/{id}',[AdminController::class,'companyPageForEdit']);
        /************end requests*****************/
Route::get('/admin/profile', function () {
    return view('admin.profile');    
});

Route::get('/admin/add_job', function () {
    return view('admin.addjob');    
});

Route::post('/admin/add_job',[AdminController::class,'store'])->name('comapany_add_job');
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

            $request->session()->put('form2',$request->input());
             // dd(array_merge(session('form1'),session('form2')));


           $u = \App\Models\JobRegister::create(['employment_type'=>$request->input('employment_type'),'job_skill'=>session()->get('form1')['job_skill'],'industry'=>session()->get('form1')['industry'],'total_hire'=>session()->get('form1')['total_hire'],'remote'=>$request->input('remote'),'candidate'=>$request->input('candidate'),'experience'=>$request->input('experience'), 'salery'=>$request->input('start_salary')."-".$request->input('start_salary') ,'job_title'=>session()->get('form1')['job_title'],'city'=>session()->get('form1')['city'],'company_id'=>session()->get('emply')['id'],'job_description'=>session()->get('form2')['job_description']]);
            return redirect('/employee/jobs');
            // dd($u);
             
  });

  Route::get('/employee/jobpost/experience',function(){
           return view('employee.jobpostexperience');
  }); 
  Route::get('/employee/jobs',[CompanyController::class,'index']);

    Route::get('/employee/jobpost/basic', function () {
    return view('employee.jobpost');
  });

    /**********************show detail of jobseeker**********************/
     Route::get('/employee/candidate/{user_id}/{job_id}',function($user_id,$job_id){
      $user =App\Models\User::find($user_id);
    return view('employee.candidate')->with('user',$user)->with('job',App\Models\JobRegister::join('submit_cvs','submit_cvs.job_register_id','=','job_registers.id')->where('job_registers.id',$job_id)->select('job_registers.*','submit_cvs.candidate_note')->first());
  });
      Route::get('/employee/candidates/{job_id}',function(Request $request,$id){
          $user=App\Models\User::join('submit_cvs','submit_cvs.user_id','=','users.id')->join('job_registers','job_registers.id','=','submit_cvs.job_register_id')->where('job_registers.company_id',session()->get('emply')['id'])->where('submit_cvs.job_register_id',$id)->select('users.*','submit_cvs.status AS jobStatus','submit_cvs.created_at AS requestTime','job_registers.id AS jobId')->get();

     return view('employee.candidates')->with('users',$user);
  });

      /*end*/
      
   Route::get('employee/logout',function(){
   
    session()->forget('emply');
    return redirect('/');
  });

});