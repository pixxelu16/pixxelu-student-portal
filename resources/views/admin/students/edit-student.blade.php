@extends('layouts.master')
@section('content')
<div class="space-remove"></div>
<div class="title-subheading">
   <h2>Student</h2>
</div>
<div class="main-table">
@if (Session::has('success')) 
<div class="notification-green">
   <p>{{ Session::get('success') }}</p>
</div>
@endif 
@if (Session::has('unsuccess')) 
<div class="notification-red">
   <p>{{ Session::get('unsuccess') }}</p>
</div>
@endif 
<h2>Edit Student Record</h2>
<div class="login-form">
<form action="{{ route('admin.update.student', $student->id) }}" Method="POST" enctype="multipart/form-data">
   @csrf 
   <div class="small-12 medium-2 large-2 columns">
      <div class="circle">
         @if($student->user_pic) 
         <img class="profile-pic" src = "{{ url('public/uploads/users/'. $student->user_pic)}}" width="60px" height="40px" alt="ai">
         @endif
      </div>
      <div class="p-image">
         <img src="{{ url('public/admin/images/i1.svg') }}" class="upload-button">
         <input class="file-upload" type="file" name="image" accept="image/*" />
      </div>
   </div>
   <div class="form-group">
      <div class="form-design first-name">
         <label for="first-name">First Name</label>
         <input type="text" id="first-name" name="first_name" value="{{ $student->first_name }}" placeholder="Enter First Name">
      </div>
      <div class="form-design last-name">
         <label for="last-name">Last Name</label>
         <input type="text" id="last-name" name="last_name" value="{{ $student->last_name }}" placeholder="Enter Last Name">
      </div>
   </div>
   <div class="form-group">
      <div class="form-design dob">
         <label for="dob">Date of Birth</label>
         <input type="date" id="dob" name="dob" value="{{ $student->dob }}">
      </div>
      <div class="form-design gender-options">
         <label>Gender</label>
         <label class="radio-option">
         <input type="radio" name="gender" value="Male" <?php if ($student->gender === 'Male') echo 'checked'; ?>>
         <span>Male</span>
         </label>
         <label class="radio-option">
         <input type="radio" name="gender" value="Female" <?php if ($student->gender === 'Female') echo 'checked'; ?>>
         <span>Female</span>
         </label>
      </div>
   </div>
   <div class="form-group">
      <div class="form-design father-name">
         <label for="father_name">Father Name</label>
         <input type="text" id="father_name" name="father_name" value="{{ $student->father_name }}" placeholder="Enter Father Name">
      </div>
      <div class="form-design phone-no">
         <label for="father_phone_no">Father Phone Number</label>
         <input type="text" id="father_phone_no" name="father_phone_no" value="{{ $student->father_phone_no }}" placeholder="Enter Father Phone Number">
      </div>
   </div>
   <div class="form-group">
      <div class="form-design aadhaar-no">
         <label for="aadhar_no">Aadhar Number</label>
         <input type="text" id="aadhar_no" name="aadhaar_no" value="{{ $student->aadhaar_no }}" placeholder="Enter Aaadhar Number">
      </div>
      <div class="form-design mail">
         <label for="email">Email</label>
         <input type="email" id="email" name="email" class="email-disabled" value="{{ $student->email }}" placeholder="Enter email address">
      </div>
   </div>
   <div class="form-group">
      <div class="form-design student-phone-no">
         <label for="student_phone_no">Student Phone Number</label>
         <input type="text" id="student_phone_no" name="student_phone_no" value="{{ $student->student_phone_no }}" placeholder="Enter Student Phone Number">
      </div>
   </div>
   <div class="form-group">
      <label>Marital Status</label>
      <div class="marital-status-options">
         <label class="radio-option">
         <input type="radio" name="marital_status" value="Married" <?php if ($student->marital_status === 'Married') echo 'checked'; ?>>
         <span>Married</span>
         </label>
         <label class="radio-option">
         <input type="radio" name="marital_status" value="Unmarried" <?php if ($student->marital_status === 'Unmarried') echo 'checked'; ?>>
         <span>Unmarried</span>
         </label>
         <label class="radio-option">
         <input type="radio" name="marital_status" value="Other" <?php if ($student->marital_status === 'Other') echo 'checked'; ?>>
         <span>Other</span>
         </label>
      </div>
      <div class="form-design category">
         <label>Category</label>
         <div class="category-options">
            <label class="radio-option">
            <input type="radio" name="category" value="General" <?php if ($student->category === 'General') echo 'checked'; ?>>
            <span>General</span>
            </label>
            <label class="radio-option">
            <input type="radio" name="category" value="ST" <?php if ($student->category === 'ST') echo 'checked'; ?>>
            <span>ST</span>
            </label>
            <label class="radio-option">
            <input type="radio" name="category" value="SC" <?php if ($student->category === 'SC') echo 'checked'; ?>>
            <span>SC</span>
            </label>
            <label class="radio-option">
            <input type="radio" name="category" value="OBC" <?php if ($student->category === 'OBC') echo 'checked'; ?>>
            <span>OBC</span>
            </label>
         </div>
      </div>
      <div class="form-group">
         <div class="form-design address">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $student->address }}" placeholder="Enter Address">
         </div>
         <div class="form-design district">
            <label for="district">District</label>
            <select name="district" class="form-control" id="district">
               <option value="" disabled selected>Select District</option>
               <option value="Bilaspur" @if($student->district == 'Bilaspur') selected @endif>Bilaspur</option>
               <option value="Chamba" @if($student->district == 'Chamba') selected @endif>Chamba</option>
               <option value="Hamirpur" @if($student->district == 'Hamirpur') selected @endif>Hamirpur</option>
               <option value="Kangra" @if($student->district == 'Kangra') selected @endif>Kangra</option>
               <option value="Kinnaur" @if($student->district == 'Kinnaur') selected @endif>Kinnaur</option>
               <option value="Kullu" @if($student->district == 'Kullu') selected @endif>Kullu</option>
               <option value="Lahaul and Spiti" @if($student->district == 'Lahaul and Spiti') selected @endif>Lahaul and Spiti</option>
               <option value="Mandi" @if($student->district == 'Mandi') selected @endif>Mandi</option>
               <option value="Shimla" @if($student->district == 'Shimla') selected @endif>Shimla</option>
               <option value="Sirmaur" @if($student->district == 'Sirmaur') selected @endif>Sirmaur</option>
               <option value="Solan" @if($student->district == 'Solan') selected @endif>Solan</option>
               <option value="Una" @if($student->district == 'Una') selected @endif>Una</option>
            </select>
         </div>
      </div>
      <div class="form-group">
         <div class="form-design state">
            <label for="state">State</label>
            <select name="state" class="form-control" id="state">
               <option value="" disabled selected>Select State</option>
               <option value="Andhra Pradesh" @if($student->state == 'Andhra Pradesh') selected @endif>Andhra Pradesh</option>
               <option value="Arunachal Pradesh" @if($student->state == 'Arunachal Pradesh') selected @endif>Arunachal Pradesh</option>
               <option value="Assam" @if($student->state == 'Assam') selected @endif>Assam</option>
               <option value="Bihar" @if($student->state == 'Bihar') selected @endif>Bihar</option>
               <option value="Chhattisgarh" @if($student->state == 'Chhattisgarh') selected @endif>Chhattisgarh</option>
               <option value="Goa" @if($student->state == 'Goa') selected @endif>Goa</option>
               <option value="Gujarat" @if($student->state == 'Gujarat') selected @endif>Gujarat</option>
               <option value="Haryana" @if($student->state == 'Haryana') selected @endif>Haryana</option>
               <option value="Himachal Pradesh" @if($student->state == 'Himachal Pradesh') selected @endif>Himachal Pradesh</option>
               <option value="Jharkhand" @if($student->state == 'Jharkhand') selected @endif>Jharkhand</option>
               <option value="Karnataka" @if($student->state == 'Karnataka') selected @endif>Karnataka</option>
               <option value="Kerala" @if($student->state == 'Kerala') selected @endif>Kerala</option>
               <option value="Madhya Pradesh" @if($student->state == 'Madhya Pradesh') selected @endif>Madhya Pradesh</option>
               <option value="Maharashtra" @if($student->state == 'Maharashtra') selected @endif>Maharashtra</option>
               <option value="Manipur" @if($student->state == 'Manipur') selected @endif>Manipur</option>
               <option value="Meghalaya" @if($student->state == 'Meghalaya') selected @endif>Meghalaya</option>
               <option value="Mizoram" @if($student->state == 'Mizoram') selected @endif>Mizoram</option>
               <option value="Nagaland" @if($student->state == 'Nagaland') selected @endif>Nagaland</option>
               <option value="Odisha" @if($student->state == 'Odisha') selected @endif>Odisha</option>
               <option value="Punjab" @if($student->state == 'Punjab') selected @endif>Punjab</option>
               <option value="Rajasthan" @if($student->state == 'Rajasthan') selected @endif>Rajasthan</option>
               <option value="Sikkim" @if($student->state == 'Sikkim') selected @endif>Sikkim</option>
               <option value="Tamil Nadu" @if($student->state == 'Tamil Nadu') selected @endif>Tamil Nadu</option>
               <option value="Telangana" @if($student->state == 'Telangana') selected @endif>Telangana</option>
               <option value="Tripura" @if($student->state == 'Tripura') selected @endif>Tripura</option>
               <option value="Uttar Pradesh" @if($student->state == 'Uttar Pradesh') selected @endif>Uttar Pradesh</option>
               <option value="Uttarakhand" @if($student->state == 'Uttarakhand') selected @endif>Uttarakhand</option>
               <option value="West Bengal" @if($student->state == 'West Bengal') selected @endif>West Bengal</option>
               <option value="Andaman and Nicobar Islands" @if($student->state == 'Andaman and Nicobar Islands') selected @endif>Andaman and Nicobar Islands</option>
               <option value="Chandigarh" @if($student->state == 'Chandigarh') selected @endif>Chandigarh</option>
               <option value="Dadra and Nagar Haveli and Daman and Diu" @if($student->state == 'Dadra and Nagar Haveli and Daman and Diu') selected @endif>Dadra and Nagar Haveli and Daman and Diu</option>
               <option value="Lakshadweep" @if($student->state == 'Lakshadweep') selected @endif>Lakshadweep</option>
               <option value="Delhi" @if($student->state == 'Delhi') selected @endif>Delhi</option>
               <option value="Puducherry" @if($student->state == 'Puducherry') selected @endif>Puducherry</option>
               <option value="Ladakh" @if($student->state == 'Ladakh') selected @endif>Ladakh</option>
               <option value="Jammu and Kashmir" @if($student->state == 'Jammu and Kashmir') selected @endif>Jammu and Kashmir</option>
            </select>
         </div>
         <div class="form-design pin-code">
            <label for="pin_code">Pin Code</label>
            <input type="text" id="pin_code" name="pin_code" value="{{ $student->pin_code }}" placeholder="Enter Pin Code">
         </div>
         <div class="form-design qualification">
            <?php $checked = explode(",", $student['qualification']); ?>
            <label>Qualification</label>
            <div class="qualification-options">
               <label class="checkbox-option">
               <input type="checkbox" name="qualification[]" value="12th" <?php if(in_array('12th', $checked)){ echo 'checked="checked"'; } ?>>
               <span>12th</span>
               </label>
               <label class="checkbox-option">
               <input type="checkbox" name="qualification[]" value="12th_Pursuing" <?php if(in_array('12th_Pursuing', $checked)){ echo 'checked="checked"'; } ?>>
               <span>12th Pursuing</span>
               </label>
               <label class="checkbox-option">
               <input type="checkbox" name="qualification[]" value="Graduation" <?php if(in_array('Graduation', $checked)){ echo 'checked="checked"'; } ?>>
               <span>Graduation</span>
               </label>
               <label class="checkbox-option">
               <input type="checkbox" name="qualification[]" value="Graduation_Pursuing" <?php if(in_array('Graduation_Pursuing', $checked)){ echo 'checked="checked"'; } ?>>
               <span>Graduation Pursuing</span>
               </label>
               <label class="checkbox-option">
               <input type="checkbox" name="qualification[]" value="Other" <?php if(in_array('Other', $checked)){ echo 'checked="checked"'; } ?>>
               <span>Other</span>
               </label>
            </div>
         </div>
         <div class="form-group">
            <div class="form-design course">
               <label for="course_type">Course Type</label>
               <select class="form-control" name="course_type" id="Course Type">
                  <option value ="" disabled selected>Select Course Type</option>
                  <option value="Designing" @if($student->course_type == 'Designing') selected @endif>Designing</option>
                  <option value="Php" @if($student->course_type == 'Php') selected @endif>PHP</option>
                  <option value="Graphic" @if($student->course_type == 'Graphic') selected @endif>Graphic</option>
               </select>
            </div>
            <div class="form-design duration">
               <label for="course_duration">Course Duration</label>
               <select class="form-control" name="course_duration" id="Course Duration">
                  <option value ="" disabled selected>Select Course Duration</option>
                  <option value="2 Month" @if($student->course_duration == '2 Month') selected @endif>2 Month</option>
                  <option value="6 Month" @if($student->course_duration == '6 Month') selected @endif>6 Month</option>
                  <option value="1 Year" @if($student->course_duration == '1 Year') selected @endif>1 Year</option>
                  <option value="2 Year" @if($student->course_duration == '2 Year') selected @endif>2 Year</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-design join-date">
               <label for="course_joining_date">Course Joining Date</label>
               <input type="date" id="course_joining_date" name="course_joining_date" value="{{ $student->course_joining_date }}">
            </div>
            <div class="form-design batch-timing">
               <label for="batch_timing">Batch Timing</label>
               <select id="batch_timing" name="batch_timing" class="form-control">
                  <option value ="" disabled selected>Select Batch Timing</option>
                  <option value="10:30 to 2:00" @if($student->batch_timing == '10:30 to 2:00') selected @endif>10:30 to 2:00</option>
                  <option value="2:00 to 5:00" @if($student->batch_timing == '2:00 to 5:00') selected @endif>2:00 to 5:00</option>
               </select>
            </div>
            <div class="form-design end-date">
               <label for="course_complession_date">Course Complession Date</label>
               <input type="date" id="course_complession_date" name="course_complession_date" value="{{ $student->course_complession_date }}">
            </div>
            <div class="form-design status">
               <label for="total-fees">Total Fees</label>
               <input type="number" id="total-fees" name="total_fees" value="{{ $student->total_fees }}" placeholder="Enter amount">
            </div>
            <div class="form-design fees">
               <label for="user_status">Status</label>
               <select class="form-control" name="user_status" id="User Status">
                  <option value ="" disabled selected>Select Status Type</option>
                  <option value="Active" @if($student->user_status == 'Active') selected @endif>Active</option>
                  <option value="Pending" @if($student->user_status == 'Pending') selected @endif>Pending</option>
                  <option value="Suspend" @if($student->user_status == 'Suspend') selected @endif>Suspend</option>
               </select>
            </div>
         </div>
         <div class="form-button">
            <div class="back-button">
               <a href="{{ url('admin/all-students-list') }}">Back</a>
            </div>
            <div class="save-button">
               <input type="submit" class="btn btn-success" name="submit" value="Update">
               <input type="reset" class="reset" name="reset" value="Cancel">
            </div>
         </div>
</form>
</div>
</div>
@endsection