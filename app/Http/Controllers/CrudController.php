<?php

namespace App\Http\Controllers;

use App\Model\Student;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * show insert form
     */
    public function showCreate()
    {
        return view('admin.create');
    }

    /**
     * show table
     */
    public function showTable()
    {   /**FOR ASSENDING all()
        FOR DESENDING latest() -> get()
        */
        $data = Student::latest() -> get();
        return view('admin.table',compact( 'data'));
    }


    /**
     * insert student start
     */
    public function insertStudent(Request $request)
    {
        /**
         * data validation
         */
        $this -> validate($request,[
           'name' => 'required',
           'email' => 'required | unique:students',
           'cell' => 'required | unique:students',
            'uname' => 'required | unique:students',
            'photo' => 'required'
        ]);

        if ($request -> hasFile('photo')) {

            $img = $request -> photo;

            $photo_name = md5(time().rand()).'.'. $img -> extension();

            $img -> move(public_path('media/student'), $photo_name);
        }else{

            $photo_name = "";
        }


        /**
         * data insert
         */
        Student::create([
            'name' => $request-> name,
            'email' => $request-> email,
            'cell' => $request-> cell,
            'uname' => $request-> uname,
            'photo' =>  $photo_name


        ]);

        return redirect() -> back() -> with('success','Data update successful');
    }


    //insert student start end


     /**
      * view single student
      */

      public function showSingle($id){

          $s_student = Student::find($id);
          return view('admin.show',compact('s_student'));

      }

      /*
       * delete student
       */
    public function deleteStudent($id)
    {
        $del_stu = Student::find($id);
        $del_stu -> delete();
        return redirect() -> back();
    }

    /**
     * edit function 
     */

}
