<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Video;
use App\Models\Course;
use App\Models\CourseComment;
use App\Models\Link;
use App\Models\ResourceLink; 
use App\Models\Resource;

use Hash;
use DB;
use Session;
// use Resource;

class TeacherController extends Controller
{
    
    //funtion to dispaly teacher registration

    public function registerTeacher(){

        return view('Teacher.register-teacher');

    }
     //function to dispaly the teachers profile
    public function teacherProfile($teacher_id){

    //    $data = DB::select('select * from teachers where teacher_id = ?',[$teacher_id]);

          $data = Teacher::where('teacher_id','=',$teacher_id)->first();

            return view('Teacher.profileOfTeachers',compact('data'));  
    }

    public function showProfile(){
        return redirect('teachers-profile');
    }

    public function saveTeacher(Request $request){

        $request->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins|unique:teachers',
            'username'=>'required|unique:admins|unique:teachers',
            'profession'=>'required',
            'catagory'=>'required',
            'password'=>'required'

       ]);
       if ($request->hasFile('image')) {
                $image = $request->file('image');
                $teaser_image = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/teacher');
                $image->move($destinationPath,  $teaser_image);
                $profile = "/teacher/".$teaser_image;
                echo "this is it " .$profile;
     
            } 

       $teacher = new Teacher;
       $link = new Link;

       $reset_password = random_int(100000, 999999);

    //    if($request->password == $request->password2) 
    //    {
             $teacher->first_name = $request->first_name;
             $teacher->middle_name = $request->middle_name;
             $teacher->last_name = $request->last_name;
             $teacher->email = $request->email;
             $teacher->username = $request->username;
             $teacher->phone_no = $request->phone_no;
             $teacher->profession = $request->profession;
             $teacher->catagory = $request->catagory;
             $teacher->teacher_id = session::get('loginId');
             $teacher->facebook = 0; 
             $teacher->twitter = 0; 
             $teacher->linkedin = 0; 
             $teacher->instagram = 0; 
             $teacher->github = 0;
             $teacher->flink = 'Null'; 
             $teacher->tlink = 'Null';
             $teacher->llink = 'Null';
             $teacher->ilink = 'Null';
             $teacher->glink = 'Null';
             $teacher->password = Hash::make($request->password);
             $teacher->role = 0;
             $teacher->isApproved = 0;
             $teacher->profile = $profile;
             $teacher->reset_password = $reset_password;
             $res = $teacher->save();

           
//  }else{
//      return back()->with('fail','Password mismatch');
//    }
    }

    public function showUploader(){
       if(Session::has('teacher')){

        // echo session::get('courseId');
             return view('Teacher.upload');
    }
}

    public function showVideoUploader(){
        if(Session::has('teacher')){

            // echo session::get('courseId');
                 return view('Teacher.uploadVideo');
        }
    }

    public function upload(Request $request){

        $request->validate([
           
            'thumb'=>'required',
            'video'=>'required'
       ]);


        if(Session::has('loginId') && session::has('courseId')){

            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $teaser_image = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/thumb');
                $image->move($destinationPath,  $teaser_image);
                $thumb = "/thumb/".$teaser_image;
              
            } 

                    if ($request->hasFile('video')) {
                        $image = $request->file('video');
                        $teaser_image = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/videos');
                        $image->move($destinationPath,  $teaser_image);
                        $path = "/videos/".$teaser_image;
                } 
                        
                $video = new Video;
                $video->course_id = session::get('courseId');
                $video->title = $request->title;
                $video->thumb = $thumb;
                $video->path = $path;
                // $video->isChecked = 0;
                 $video->save();  
        }
    }

    public function addCourse(Request $request){
        if(Session::has('loginId') && Session::has('teacher')){

            if ($request->hasFile('course_thumb')) {
                $image = $request->file('course_thumb');
                $teaser_image = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/thumb');
                $image->move($destinationPath,  $teaser_image);
                $course_thumb = "/thumb/".$teaser_image;
               
            } 

                if ($request->hasFile('course_intro')) {
                    $video = $request->file('course_intro');
                    $vid_path = time().'.'.$video->getClientOriginalExtension();
                    $destinationPath = public_path('/videos');
                    $video->move($destinationPath,  $vid_path);
                    $course_intro = "/videos/".$vid_path;
                        
                            } 
                        $course = new Course;
                        $course->teacher_id = session::get('loginId');
                        $course->course_no = 2;
                        $course->course_name = $request->course_name;
                        $course->course_catagory = $request->course_catagory;
                        $course->course_description = $request->course_description;
                        $course->course_detail = $request->course_detail;
                        $course->course_thumb = $course_thumb;
                        $course->course_intro = $course_intro;
                        $course->course_fee = $request->course_fee;
                        $course->courseChecked = 0;
                        $course->save();
        }
    }

    public function showCourse(){
        if(session::has('loginId') && session::has('teacher')){
            $course = Course::where('teacher_id','=',session::get('loginId'))
                             ->where('courseChecked',1)
                             ->get();
            return view('Teacher.courses',compact('course'));
        }  
    }

    public function courses($id){
      Session()->put('courseId',$id);
      return redirect('upload-video');
    //   return view('Teacher.upload');
     
    }

    public function courseComment(Request $request,$id){
        if(Session::has('loginId')){
            if(Session::has('student')){

                Session()->put('course',$id);
               
                $comment = new CourseComment;
                $comment->comment = $request->comment;
                $comment->course_id = $id;
                $comment->student_id = Session::get('loginId');
                $comment->save();

                return redirect()->back();
                
                }
            } 
        }
    

    // public function showCourseComments(){

    //     $comment = CourseComment::all();
        
    //       return view('Home.view',compact('comment'));

    // }

     // function to edit the account

     public function editAccount(){

        if(Session::has('loginId') && Session::has('teacher')){
       
            $teacher = Teacher::where('teacher_id','=',session::get('loginId'))->first();
            // $link = Link::where('teacher_id','=',session::get('loginId'))->first();
           
            return view('Teacher.editTeacherAccount',compact('teacher'));

        }
     }

     public function getTeacherData(){
      
     }

     //teachers detail information

     public function teacherDetail(Request $request,$id){
         
        $teacher = Teacher::where('teacher_id',$id)->first();
        $course = Course::where('teacher_id',$id)->get();

        return view('Home.teacherDetail',['teacher'=>$teacher,'course'=>$course]);

     }

     public function updateAccount(Request $request){

        if(Session::has('loginId') && Session::has('teacher')){
       
            $teacher = Teacher::where('teacher_id','=',session::get('loginId'))->first();

        }
       
                if( $request->facebook != ''){
                    $facebook = 1;
                    $flink =  $request->facebook;
                }
                else{

                    $facebook = 0;
                    $flink = '';
                }

                if( $request->twitter != ''){
                    $twitter = 1;
                    $tlink =  $request->twitter;
            }
            else{
                
                $twitter = 0;
                $tlink = '';

            }
                if( $request->linkedin != ''){
                    $linkedin = 1;
                    $llink =  $request->linkedin;
            }
            else{
                
                $linkedin = 0;
                $llink = '';
    
            }
                if( $request->instagram != ''){
                    $instagram = 1;
                    $ilink =  $request->instagram;
            }
            else{
                
                $instagram = 0;
                $ilink = '';
            }

            if( $request->github != ''){
                $github = 1;
                $glink =  $request->github;
        }
        else{
            
            $github = 0;
            $glink = '';

        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $teaser_image = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher');
            $image->move($destinationPath,  $teaser_image);
            $profile = "/teacher/".$teaser_image;
            echo "this is it " .$profile;
 
        } 
        else{
            $teacher = Teacher::where('teacher_id',
            session::get('loginId'))->first();
            $profile = $teacher->profile;
        }

                  $teacher = Teacher::where('teacher_id',
                                   session::get('loginId'))->
                                    update([
                                            'first_name' =>$request->first_name,
                                            'middle_name' =>$request->middle_name,
                                            'last_name' =>$request->last_name,
                                            'email' =>$request->email,
                                            'phone_no' =>$request->phone,
                                            'username' =>$request->username,
                                            'profile' =>$profile,
                                            'facebook'=> $facebook,
                                            'twitter'=> $twitter,
                                            'linkedin'=> $linkedin,
                                            'instagram'=> $instagram,
                                            'github'=> $github,
                                            'flink'=> $flink,
                                            'tlink'=> $tlink,
                                            'llink'=> $llink,
                                            'ilink'=> $ilink,
                                            'glink'=>$glink
                                        ]);
                                        return redirect()->back();

            }

       public function showChangePassword(){
           return view('Teacher.setting');
       }

       public function changePassword(Request $request){

        $passwod = $request->password;
        $new_password =  Hash::make($request->new_password);
        $confirm_password =$request->confirm_password;

          if($request->new_password == $confirm_password){
        $teacher = Teacher::where('teacher_id','=',session::get('loginId'))->first();
        if(Hash::check($request->password,$teacher->password)){

           
            $teacher = Teacher::where('teacher_id',
            session::get('loginId'))->
             update(['password'=> $new_password  
                 ]);
                      
          }
          else{
             
          }
        }
        else{
            echo "not the same";

        }

       }

       public function addResource(Request $request){

        if ($request->hasFile('resource')) {
            $resource = $request->file('image');
            $teaser_image = time().'.'.$resource->getClientOriginalExtension();
            $destinationPath = public_path('/resource');
            $resource->move($destinationPath,  $teaser_image);
            $resource_path = "/teacher/".$teaser_image;
            echo "this is it " .$resource_path;
 
        } 
           $resource = new Resource;
           $resource->teacher_id = session::get('loginId');
           $resource->resource_name = $request->resource_name;
           $resource->resource =  $resource_path;
       }

       public function addResourceLink(Request $request){
           $link = new ResourceLink;
           $link->teacher_id = session::get('loginId');
           $link->resource_link = $request->link;
           $link->save();

      }
    }

