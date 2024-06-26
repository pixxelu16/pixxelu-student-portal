<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DateTime;

class StudentController extends Controller
{ 
    //Function for Get all students list
    public function all_students(){
    $get_students_detail = User::where('user_type', 'Student')->orderBy('id', 'DESC')->get();
        return view('admin.students.all-students-list', compact('get_students_detail'));
    }  
    
    //Function for add student
    public function add_student(){
        return view('admin.students.add-new-student');
    }

    //Function for submit student
    public function submit_student(Request $request) {
        // Check if the email already exists
        $is_email_exists = User::where('email', $request->email)->exists();
        if ($is_email_exists) {
            return back()->with('unsuccess', 'Email is already taken, Please try with a new email.');
        }    
        //Check if user image exists or not
        $filename = 'default_user.png';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/users'), $filename);
        }
        //Qualifications convert to string
        $qualification = implode(',', $request->input('qualification'));
    
        //Calculate course completion date
        try {
            $course_joining_date = new DateTime($request->course_joining_date);
            $duration_parts = explode(' ', $request->course_duration);
            
            if (count($duration_parts) == 2) {
                $number = (int) $duration_parts[0];
                $unit = strtolower($duration_parts[1]); 
    
                switch ($unit) {
                    case 'month':
                    case 'months':
                        $course_joining_date->modify("+$number months");
                        break;
                    case 'year':
                    case 'years':
                        $course_joining_date->modify("+$number years");
                        break;
                    default:
                        return back()->with('unsuccess', 'Invalid course duration unit.');
                }
            } else {
                return back()->with('unsuccess', 'Invalid course duration format.');
            }
    
            $course_complession_date = $course_joining_date->format('Y-m-d');
        } catch (Exception $e) {
            return back()->with('unsuccess', 'Invalid course joining date format.');
        }    
        //Create student
        $create_student = User::create([
            'name' => $request->first_name . " " . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'father_name' => $request->father_name,
            'father_phone_no' => $request->father_phone_no,
            'aadhaar_no' => $request->aadhaar_no,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'student_phone_no' => $request->student_phone_no,
            'marital_status' => $request->marital_status,
            'category' => $request->category,
            'address' => $request->address,
            'district' => $request->district,
            'state' => $request->state,
            'pin_code' => $request->pin_code,
            'qualification' => $qualification,
            'course_type' => $request->course_type,
            'course_duration' => $request->course_duration,
            'course_joining_date' => $request->course_joining_date,
            'batch_timing' => $request->batch_timing,
            'course_complession_date' => $course_complession_date,
            'total_fees' => $request->total_fees,
            'user_status' => $request->user_status,
            'user_type' => 'Student',
            'user_pic' => $filename,
        ]);   
        //Check if student record created or not
        if ($create_student) {
            return back()->with('success', 'Student record created successfully.');
        } else {
            return back()->with('unsuccess', 'Oops, something went wrong.');
        }
    }

    //Function for edit student
    public function edit_student($id){
    $student = User::find($id);
        return view('admin.students.edit-student', compact('student'));
    }

    //Function for update student
    public function update_student(Request $request, $id){
        //Check if user image is exit or not
        $filename = 'default_user.png';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/users'), $filename);
            //qualifications convert to string
            $qualification = implode(',', $request->input('qualification'));
            //Update student record with image
            $update_student = User::where('id', $id)->update([
                'name' => $request->first_name." ".$request->last_name,
                'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'dob' =>$request->dob,
                'gender' =>$request->gender,
                'father_name' =>$request->father_name,
                'father_phone_no' =>$request->father_phone_no,
                'aadhaar_no' =>$request->aadhaar_no,
                'student_phone_no' =>$request->student_phone_no,
                'marital_status' =>$request->marital_status,
                'category' =>$request->category,
                'address' =>$request->address,
                'district' =>$request->district,
                'state' =>$request->state,
                'pin_code' =>$request->pin_code,
                'qualification' => $qualification,
                'course_type' =>$request->course_type,
                'course_duration' =>$request->course_duration,
                'course_joining_date' =>$request->course_joining_date,
                'batch_timing' =>$request->batch_timing,
                'total_fees' =>$request->total_fees,
                'user_status' =>$request->user_status,
                'user_type' =>'Student',
                'user_pic' =>$filename,
            ]);
            //Check if student record created or not
            if($update_student){
                return back()->with('success', 'Student record updated successfully.');
            } else {
                return back()->with('unsuccess', 'Opps something went wrong.');
            }
        } else {
            $qualification = implode(',', $request->input('qualification'));
            //Update student record without image
            $update_student = User::where('id', $id)->update([
                'name' => $request->first_name." ".$request->last_name,
                'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'dob' =>$request->dob,
                'gender' =>$request->gender,
                'father_name' =>$request->father_name,
                'father_phone_no' =>$request->father_phone_no,
                'aadhaar_no' =>$request->aadhaar_no,
                'student_phone_no' =>$request->student_phone_no,
                'marital_status' =>$request->marital_status,
                'category' =>$request->category,
                'address' =>$request->address,
                'district' =>$request->district,
                'state' =>$request->state,
                'pin_code' =>$request->pin_code,
                'qualification' => $qualification,
                'course_type' =>$request->course_type,
                'course_duration' =>$request->course_duration,
                'course_joining_date' =>$request->course_joining_date,
                'batch_timing' =>$request->batch_timing,
                'total_fees' =>$request->total_fees,
                'user_status' =>$request->user_status,
                'user_type' =>'Student',
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
    $delete_student = User::find($id)->delete();
        //Check if student deleted or not
        if($delete_student){
            return back()->with('success', 'Student record deleted successfully.');
        } else {
            return back()->with('unsuccess', 'Opps something went wrong.');
        }
    }
}
