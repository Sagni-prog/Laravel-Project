<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\CourseComment;
use App\Models\VideoComment;
use App\Models\Student;
use DB;
use Session;

class VideoController extends Controller
{

      public function view($id){

  
          
          // $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
          // ->join('videos','videos.course_id','=','courses.course_id')
          // ->where('courses.course_id','=',$id)
          // ->get();

               $course = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                                 ->where('courses.course_id','=',$id)
                                 ->first();
               $data = Video::where('course_id','=',$id)->get();
               $comment = CourseComment::join('students','course_comments.student_id','=','students.student_id')
                                        ->where('course_comments.course_id',$id)->get();

                $count = $data->count();
               return view("Home.view",['course'=>$course,'data'=>$data,'counts'=>$count,'comment'=>$comment]);

      }

      public function videoComment(Request $request,$id){
            if(Session::has('loginId')){
                if(Session::has('student')){
                      if(session::get('status') == 1){
    
                    Session()->put('video',$id);
                   
                    $videoComment = new VideoComment;
                    $videoComment->video_comment = $request->comment;
                    $videoComment->vid_id = $id;
                    $videoComment->student_id = Session::get('loginId');
                    $videoComment->created_at = now();
                    $videoComment->save();
    
    
                    return redirect()->back();
                    
                    }
                  }
                   
                }
                
            }

            public function showVideo($vid_id){

                 if(Session::has('loginId') && 
                      Session::get('student') == 2 &&
                         Session::get('status') == 1){ 
                              $student = Student::where('student_id',session::get('loginId'))->first();
                              $comments = videoComment::join('students','students.student_id','=','video_comments.student_id')
                                                      ->where('video_comments.vid_id',$vid_id)->get();
                              $videos = Video::where('vid_id',$vid_id)->get();               
                                $comment_count = $comments->count();                      
                 

          $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                        ->join('videos','videos.course_id','=','courses.course_id')
                        ->where('videos.vid_id','=',$vid_id)
                        ->where('teachers.isApproved','=',1)
                        ->where('courses.courseChecked','=',1)
                        ->first();
                 return view('Home.show',['data' => $data,
                                        'student' => $student,
                                        'comments' => $comments,
                                        'comment_count' => $comment_count,
                                         'videos'=>$videos]);
  
           }
           else{
                 return redirect('student/login');
           }
       }
        

      // public function all(){ 
      //   $datas = Teacher::where('isApproved','=',1)->get();
      //   $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
      //                  ->join('videos','videos.course_id','=','courses.course_id')
      //                  ->get();
      //       return view("welcome",['data'=>$data,'datas'=>$datas]);
      // }

        public function notApproved(){

        $data = Video::where('isChecked','=',0)->get();
        // return view("Home.view",compact('data'))

      }

      public function Approved(){

        $data = Video::where('isChecked','=',1)->get();
        // return view("Home.view",compact('data'))
      }  
  }
