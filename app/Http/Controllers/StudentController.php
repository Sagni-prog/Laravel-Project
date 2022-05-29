<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Feedback;
use Hash;
use Session;

class StudentController extends Controller
{
    public function studentRegistration(Request $request){

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins|unique:teachers|unique:students',
            'password'=>'required'

       ]);

       $student = new Student;

       $reset_password = random_int(100000, 999999);
       $profile = "/student/me.jpg";
      

       if($request->password == $request->password2) 
       {
             $student->first_name = $request->first_name;
             $student->last_name = $request->last_name;
             $student->email = $request->email;
             $student->password = Hash::make($request->password);
             $student->reset_password = $reset_password;
             $student->role = 2;
             $student->profile = $profile;
             $student->status = 1;
             $res = $student->save();
             return redirect()->back();
          

        }
    }

    public function Student(){

        if(Session::has('loginId') && session::get('student') == 2 && session::get('status') == 1){
           
            $student = Studnet::where('student_id',session::get('loginId'))->first();

            return view('Home.show',compct('student'));
        }


    }

    public function feedback(Request $request){

         $feedback = new Feedback;
         $feedback->student_id = Session::get('loginId');
         $feedback->feedback = $request->message;
         $feedback->save();


    }

    public function getFeedback(){

        if(session::has('loginId') && session::has('admin')){
            $feedback = Feedback::join('students','students.student_id','=','feedbacks.student_id')->get();
            

        }

    }

}
