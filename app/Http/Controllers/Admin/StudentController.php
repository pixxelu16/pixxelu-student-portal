<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StudentController extends Controller
{
    //Function for Get all students
    public function all_students(){
    $get_students_detail = User::OrderBy('ID', 'DESC')->get();   
        return view('admin.students.all-students-list', compact('get_students_detail'));
    }
    //Function for add student
    public function add_student(){
        return view('admin.students.add-new-student');
    }

    //Function for submit student
    public function submit_student(Request $request){
        //Check if user image is exit or not
        $filename = 'default_user.png';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/users'), $filename);
        }
        //Create student
        $create_student = User::create([
            'name' => $request->first_name." ".$request->last_name,
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
            'father_name' =>$request->father_name,
            'dob' =>$request->dob,
            'address' =>$request->address,
            'aadhaar_no' =>$request->aadhaar_no,
            'phone_no' =>$request->phone_no,
            'email' =>$request->email,
            'password' => Hash::make($request['password']),
            'course_type' =>$request->course_type,
            'joining_date' =>$request->joining_date,
            'end_date' =>$request->end_date,
            'total_fees' =>$request->total_fees,
            'course_duration' =>$request->course_duration,
            'user_status' =>$request->user_status,
            'user_type' =>'Admin',
            'user_pic' =>$filename,
        ]);

        //Check if student record created or not
        if($create_student){
            return back()->with('success', 'Student record created successfully.');
        } else {
            return back()->with('unsuccess', 'Opps something went wrong.');
        }
    }

    //Function for edit student
    public function edit_student($id){
    $students = User::find($id);
        return view('admin.students.edit-student', compact('students'));
    }

    //Function for update student
    public function update_student(Request $request, $id){
        //Check if user image is exit or not
        $filename = 'default_user.png';
        if($request->hasFile('image')) {
            //Get student 
            $students = User::find($id);
            //Get imagepath 
            $imagepath = public_path('uploads/users/' .$students->user_pic);
            //Check if student image exists or not folder
            if(file_exists($imagepath) && is_file($imagepath)){
                //Remove image folder
                unlink($imagepath);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/users'), $filename);
            //Update student record with image
            $update_student = User::where('id', $id)->update([
                'name' => $request->first_name." ".$request->last_name,
                'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'father_name' =>$request->father_name,
                'dob' =>$request->dob,
                'address' =>$request->address,
                'aadhaar_no' =>$request->aadhaar_no,
                'phone_no' =>$request->phone_no,
                'password' => Hash::make($request['password']),
                'course_type' =>$request->course_type,
                'joining_date' =>$request->joining_date,
                'end_date' =>$request->end_date,
                'total_fees' =>$request->total_fees,
                'course_duration' =>$request->course_duration,
                'user_status' =>$request->user_status,
                'user_type' =>'Admin',
                'user_pic' =>$filename,
            ]);
            //Check if student record created or not
            if($update_student){
                return back()->with('success', 'Student record updated successfully.');
            } else {
                return back()->with('unsuccess', 'Opps something went wrong.');
            }
        } else {
            //Update student record without image
            $update_student = User::where('id', $id)->update([
                'name' => $request->first_name." ".$request->last_name,
                'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'father_name' =>$request->father_name,
                'dob' =>$request->dob,
                'address' =>$request->address,
                'aadhaar_no' =>$request->aadhaar_no,
                'phone_no' =>$request->phone_no,
                'password' => Hash::make($request['password']),
                'course_type' =>$request->course_type,
                'joining_date' =>$request->joining_date,
                'end_date' =>$request->end_date,
                'total_fees' =>$request->total_fees,
                'course_duration' =>$request->course_duration,
                'user_status' =>$request->user_status,
                'user_type' =>'Admin',
            ]);
            //Check if student record created or not
            if($update_student){
                return back()->with('success', 'Student record updated successfully.');
            } else {
                return back()->with('unsuccess', 'Opps something went wrong.');
            }
        }
    }
    
    //Function for delete student
    public function delete_student($id){
        //Get student 
        $students = User::find($id);
        //Get imagepath
        $imagepath = public_path('uploads/users/' .$students->user_pic);
        //Check if student image is exists or not folder
        if(file_exists($imagepath) && is_file($imagepath)){
            //Remove image folder
            unlink($imagepath);
            //student record delete with image
            $students->delete();
            return back()->with('success', 'Student record deleted successfully.');
        } else {
            //student record delete without image
            $students->delete();
            return back()->with('success', 'Student record deleted successfully.');
        }
    }
}
