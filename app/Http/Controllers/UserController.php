<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\JobRegister;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\SaveJob;
use App\Models\Company;
use Illuminate\Http\Request;
use PDF;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $it = JobRegister::where('industry','computer')->count();
        $eng = JobRegister::where('industry','engineer')->count();
        $business = JobRegister::where('industry','business')->count();
        $bpo = JobRegister::where('industry','call_center')->count();
        $sales_marketing = JobRegister::where('industry','sales_marketing')->count();
        $total = JobRegister::count();
       
        return view('user.index')->with(['it'=>$it,'eng'=>$eng,'business'=>$business,'bpo'=>$bpo,'sales_marketing'=>$sales_marketing,'total'=>$total]);
    }
      /**
     * User Login the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
          
            'password' => 'required',
             
           ]);
         $user = User::where('email',$request->email)->with('experiences','skills','education')->first();

         if($user){
            if (\Hash::check($request->password, $user->password)) {
                $request->session()->put('user', $user);

                return redirect()->back();
             }
          }
             return redirect()->back()->withErrors(['Error in email or password']);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchJob(Request $request)
    {

if (!empty($request->location) && !empty($request->job) && !empty($request->jt)) {
     
           $searchs = JobRegister::where('city',$request->location)
                    ->where('employment_type',$request->jt)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->job) && !empty($request->jt)) {
     
           $searchs = JobRegister::where('employment_type',$request->jt)
                    
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
              
     
                 
         }elseif (!empty($request->location) && !empty($request->jt)) {
     
           $searchs = JobRegister::where('employment_type',$request->jt)
                     
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->jt)) {
     
           $searchs = JobRegister::where('employment_type',$request->jt)
                     
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }
         if (!empty($request->location) && !empty($request->job) && !empty($request->candidate)) {
     
           $searchs = JobRegister::where('city',$request->location)
                    ->where('candidate',$request->candidate)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->job) && !empty($request->candidate)) {
     
           $searchs = JobRegister::where('candidate',$request->candidate)
                    
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
              
     
                 
         }elseif (!empty($request->location) && !empty($request->candidate)) {
     
           $searchs = JobRegister::where('candidate',$request->candidate)
                     
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->candidate)) {
     
           $searchs = JobRegister::where('candidate',$request->candidate)
                     
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }

         elseif (!empty($request->location) && !empty($request->job) && !empty($request->company)) {
    
           $searchs = JobRegister::where('city',$request->location)
                    ->where('company',$request->company)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
              
         }



         elseif (!empty($request->location) && !empty($request->job) && !empty($request->education)) {
    
            $searchs = JobRegister::where('city',$request->location)
                    ->where('education',$request->education)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
          }elseif (!empty($request->job) && !empty($request->education)) {
     
           $searchs = JobRegister::where('education',$request->education)
                    
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
              
     
                 
         }elseif (!empty($request->location) && !empty($request->education)) {
     
           $searchs = JobRegister::where('education',$request->education)
                     
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->education)) {
     
           $searchs = JobRegister::where('education',$request->education)
                     
                    ->with('company')
                    ->paginate(4);
              
         }
         elseif (!empty($request->location) && !empty($request->job) && !empty($request->company)) {
    
            $searchs = JobRegister::where('city',$request->location)
                    ->where('company_id',$request->company)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
          }




         elseif (!empty($request->job) && !empty($request->company)) {
     
           $searchs = JobRegister::where('company_id',$request->company)
                    
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
              
     
                 
         }elseif (!empty($request->location) && !empty($request->company)) {
     
           $searchs = JobRegister::where('company_id',$request->company)
                     
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')
                    ->paginate(4);
                    
     
                 
         }elseif (!empty($request->company)) {
     
           $searchs = JobRegister::where('company_id',$request->company)
                     
                    ->with('company')
                    ->paginate(4);
              
         }




         elseif (!empty($request->location) && !empty($request->job)) {

             $searchs = JobRegister::where('city',$request->location)
                    ->where('job_skill','like',$request->job. '%')
                    ->with('company')->paginate(4);
        
                
         }elseif (!empty($request->location) || !empty($request->job)) {

              $searchs = JobRegister::where('job_skill','like',$request->job. '%')
              ->OrWhere('city',$request->location)
                    
                    ->with('company')->paginate(4);
       
            
         }else{
             
               $searchs = JobRegister::where('city',$request->location)
                      ->OrWhere('job_skill','like',$request->job. '%')
                      ->with('company')->paginate(4);
                  } 
            return view('user.search')->with('searchs',$searchs)->with('companies',Company::select('id','name')->get());
        
             
    }

    public function myjob($id)
    {

          $searchs = JobRegister::join('save_jobs','save_jobs.job_register_id','=','job_registers.id')->where('save_jobs.user_id',$id)->select('job_registers.*','save_jobs.id AS job_id')
                    
                    ->with('company')->paginate(4);
          return view('user.myjob')->with('searchs',$searchs);
        
    }

    public function addSaveJob($user_id,$job_id)
    {
        $user = SaveJob::where('user_id',$user_id)->where('job_register_id',$job_id)->first();

         if ($user) {
                    return redirect()->back()->withErrors(['Already Save.']);
         }else{
            SaveJob::create(['user_id'=>$user_id,'job_register_id'=>$job_id]);
                    return redirect()->back()->withErrors(['Job Save.']);

         }


    }
    public function delSaveJob($save_job_id)
    {
        $save_job = SaveJob::find($save_job_id);
        if ($save_job) {
            $save_job->delete();
            return redirect()->back();
        }
        else{
            return redirect()->back()->withErrors(['Error in Record.']);
        }
    }
    public function login(Request $request)
    {
        // dd($request->input());
        $user =  User::where('email',$request->email)
                        ->where('password',md5($request->password))
                        ->first();
        if ($user) {
            return redirect()->route('main');
            // return view('main')->with('users',User::paginate(4));
        }else{
            echo'<script>alert("error....")</script>';
            echo "<a href='login'>back</a>";
            // return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchJobDetail($id)
    {
        $user = User::whereId($id)->with('skill_detail','skills','experiences','education','skill_detail','summary','heading','file')->first();
         
         return view('user.searchdetail')
         ->with('userDetail',$user)
         ->with('search',JobRegister::where('id',$id)->with('company','skill')->first())
         ->with('companies',Company::join('job_registers','job_registers.company_id','=','companies.id')->select('companies.*','job_registers.created_at AS jobdate')->orderBy('job_registers.created_at','DESC')->paginate(5))
         ->with('jobs',JobRegister::join('companies','companies.id','=','job_registers.company_id')->select('job_registers.job_title','companies.name','companies.address','job_registers.created_at')->orderBy('job_registers.created_at','DESC')->paginate(4));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request,$id)
    {
         dd($request->input());
    }

    public function updateHeading(Request $request,$id)
    {
        $user = User::find($id);
 
     $user->heading()->updateOrCreate(['body'=>$request->input('heading')]) ;


         return redirect()->back();
         
        
    }
    public function userDetail(Request $request,$id)
    {
        $user=User::find($id);
        
        $dataOfUser['lname']=$request->input('lname');
        $dataOfUser['name']=$request->input('fname');
        $dataOfUser['city']=$request->input('city');
        if($request->input('phone')){
        $dataOfUser['phone']=$request->input('phone');
    }
       
        $user->update($dataOfUser);

        return json_encode($dataOfUser);
    }

    public function experienceSave(Request $request,$id)
    {
       
        $user=User::find($id);

        if ($request->current) {
             $request->merge(['current_company'=>'current']);
        }else{
             $request->merge(['current_company'=>'Null']);

        }
        $u = $user->experiences()->create(['job_title'=>$request->title,'company'=>$request->company,'city'=>$request->city,'date_from'=>$request->from,'date_to'=>$request->to,'skill'=>$request->detail,'current_company'=>$request->current_company]);
        
        if ($u) {
             return redirect()->back()->withErrors(['experience added']);
             
        }
         else{
             return redirect()->back()->withErrors(['Error .']);

         }
        
    //     $dataOfUser['lname']=$request->input('lname');
    //     $dataOfUser['name']=$request->input('fname');
    //     $dataOfUser['city']=$request->input('city');
    //     if($request->input('phone')){
    //     $dataOfUser['phone']=$request->input('phone');
    // }
       
    //     $user->update($dataOfUser);

        return json_encode($request->input());
    }

        public function updateSummary(Request $request,$id)
    {
        $user = User::find($id);

        $user->summary()->update(['body'=>$request->input('summary')]);

         return redirect()->back();
         
        
    }

    public function updateFile(Request $request,$id)
    {
        $request->validate([
        'resume' => 'required|mimes:pdf,doc,txt'
           ]);
            $user=User::find($id);
             $resume=$request->file('resume');
          
               $filename = $resume->getClientOriginalName();
                   $resume->move('file/', $filename);
                 
        if ($user->update(['resume'=>'file/'.$filename])) {
             return redirect()->back()->withErrors(['file uploaded']);
             
        }
         else{
             return redirect()->back()->withErrors(['Error in file upload.']);

         }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getProfileDetail($id)
    {
       $user =   User::where('id',$id)->with('experiences','skills','education','skill_detail','summary','heading')->first();
        if($user){
        return view('user.profile')->with('user',$user);
        }else{
            return redirect('/');
        }
    }
    public function createPDF($id) {
      
      $user =   User::where('id',$id)->with('experiences','skills','education','skill_detail','summary','heading')->first();
         
      view()->share('user',$user);
      $pdf = PDF::loadView('user.profile', $user);

      
      return $pdf->download('pdf_file.pdf');
    }

    public function personal($id)
    {
        return view('user.personal')->with('user',User::find($id));
        
    }
    public function personalSave(Request $request,$id)
    {
         
        $user=User::find($id);
       
        $dataOfUser['lname']=$request->input('lname');
        $dataOfUser['name']=$request->input('fname');
        $dataOfUser['city']=$request->input('city');
        $dataOfUser['gender']=$request->input('gender');
        $dataOfUser['age']=$request->input('age');
        $dataOfUser['country']=$request->input('country');
        $dataOfUser['address']=$request->input('address');
        if($request->input('phone')){
        $dataOfUser['phone']=$request->input('phone');
        $dataOfUser['candidate_note']=$request->input('candidate_note');
    }
        if ($request->file('cv')) {
              $request->validate([
              'cv' => 'required|mimes:pdf,doc,txt'
           ]);
            $resume=$request->file('cv');
            $filename = $resume->getClientOriginalName();
            $resume->move('file/', $filename);
            $dataOfUser['resume']='file/'.$filename;
        
        }
        
       
        


            
                 
        if ($user->update($dataOfUser)) {
             return redirect('/user/experience/'.$id)->withErrors(['Record Added Successfully']);
             
        }
         else{
             return redirect()->back()->withErrors(['Error in file upload.']);

         }
        
    }
     public function experience($id)
    {
        return view('user.experience')->with('user',User::find($id));
        
    }

    public function experienceDel($id)
    {
        $exp = Experience::find($id);
        if ($exp->delete()) {
             return redirect()->back();
        }else{
            return redirect()->back()->withErrors(['Error Record not Found.']);
        }
           
    }

    public function skill($id)
    {
        return view('user.skill')->with('user',User::find($id));
        
    }

    public function skillDel($id)
    {
        $skill = Skill::find($id);
        if ($skill->delete()) {
             return redirect()->back();
        }else{
            return redirect()->back()->withErrors(['Error Record not Found.']);
        }
           
    }

     public function skillSave(Request $request,$id)
    {
        $user=User::find($id);
       
         
                 
        if ($user->skills()->create(['body'=>$request->body])) {
             return redirect('/user/skill/'.$id)->withErrors(['Record Added Successfully']);
             
        }
         else{
             return redirect()->back()->withErrors(['Error in file upload.']);

         }
        
    }

    public function education($id)
    {
        return view('user.education')->with('user',User::find($id));
        
    }

    public function educationSave(Request $request,$id)
    {
         
         $user=User::find($id);
        


        if ($user->education()->create($request->except('current'))) {
             return redirect()->back()->withErrors(['Redcord added.']);
             
        }
         else{
             return redirect()->back()->withErrors(['Error in file upload.']);

         }
    }

    public function educationDel($id)
    {
        $exp = Education::find($id);
        if ($exp->delete()) {
             return redirect()->back();
        }else{
            return redirect()->back()->withErrors(['Error Record not Found.']);
        }
           
    }


    public function addUserData($id)
    {
        return view('user.adduserdata')->with('user',User::find($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userRegister(Request $request)
    {
        $request->validate([
            'email'=>'unique:users,email',
            'password'=>'required|min:6'
        ]);
        $parts = explode("@", $request->email);
        $username = $parts[0];
        $user=User::create(['name'=>$username,'email'=>$request->email,'password'=>\Hash::make($request->password)]);
        if ($user) {
            $request->session()->put('user', $user);

                return redirect()->back(); 
        }else{
            return redirect()->back()->withErrors(['Error in User.']);
        }
        
    }
}
