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
     * file uplode function
     */
    public function fileUplode($img)
    {
        $photo_name = md5(time().rand()).'.'. $img -> extension();
        $img -> move(public_path('media/student'), $photo_name);
        return $photo_name;
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

            $image = $request -> photo;
            $photo_name = $this -> fileUplode($image);

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
     * data loa for edit page
     */
    public function editStudent($id)
    {
        $edit_stu = Student::find($id);
        return view('admin.edit',compact('edit_stu'));
    }

    /**
     *
     */
    public function upadateStudent(Request $request ,$id)
    {
        $colom_name = Student::find($id);

        if ($request->hasFile('new_photo')) {
            $phot_name = $this->fileUplode($request->new_photo);
            unlink('media/student/' . $request->old_photo);
        } else {

            $phot_name = $request->old_photo;
        }

        $colom_name->name = $request->name;
        $colom_name->email = $request->email;
        $colom_name->cell = $request->cell;
        $colom_name->uname = $request->uname;
        $colom_name->photo = $phot_name;
        $colom_name->update();

        return redirect() -> back() -> with('success','data update successful');
    }
}
