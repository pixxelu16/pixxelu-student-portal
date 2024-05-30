@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
   .notifaction-green {
   color: green;
   }
   .notification-red {
   color: red;
   }
   .email-disabled {
   pointer-events: none;
   background-color: #e9ecef; 
   color: #6c757d; 
   }
   input.reset {
      padding: 8px;
      font-size: 14px;
      color: white;
      background: red;
      border: none;
      border-radius: 5px;
      width: 74px;
      height: 40px;
   }
</style>
<section class="content">
@if (Session::has('success')) 
<div class="notifaction-green">
   <p>{{ Session::get('success') }}</p>
</div>
@endif 
@if (Session::has('unsuccess')) 
<div class="notifaction-red">
   <p> {{ Session::get('unsuccess') }}</p>
</div>
@endif
<div class="card-header">
   <h3 class="card-title">Edit Student</h3>
</div>
<form action="{{ route('admin.update.student.admin', $students->id) }}" Method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group">
   <label for="first_name">First Name</label>
   <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $students->first_name}}" placeholder="First Name">
   <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $students->last_name}}" placeholder="Last Name">
   </div>
   <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control email-disabled" id="email" value="{{ $students->email }}" id="email" readonly placeholder="Email">
   </div>
   <div class="form-group">
      <label for="dob">Date Of Birth</label>
      <input type="date" name="dob" class="form-control" id="date" value="{{ $students->dob}}" placeholder="Date Of Birt">
   </div>
   <div class="form-group">
    <label>Gender</label>
    <div class="gender-options">
        <label class="radio-option">
        <input type="radio" name="gender" value="Male" <?php if ($students->gender === 'Male') echo 'checked'; ?>>
            <span>Male</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="gender" value="Female" <?php if ($students->gender === 'Female') echo 'checked'; ?>>
            <span>Female</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="father_name">Father Name</label>
      <input type="text" name="father_name" class="form-control" id="father_name" value="{{ $students->father_name}}" placeholder="Father Name">
   </div>
   <div class="form-group">
      <label for="father_phone_no">Father Mobile Number</label>
      <input type="text" name="father_phone_no" class="form-control" id="father_phone_no" value="{{ $students->father_phone_no}}" placeholder="Father Mobile Number">
   </div>
   <div class="form-group">
      <label for="aadhar_no">Aadhar Number</label>
      <input type="text" name="aadhaar_no" class="form-control" id="aadhar_no" value="{{ $students->aadhaar_no}}" placeholder="Aadhar Number">
   </div>
   <div class="form-group">
      <label for="student_phone_no">Student Mobile Number</label>
      <input type="text" name="student_phone_no" class="form-control" id="student_phone_no" value="{{ $students->student_phone_no}}" placeholder="Student Mobile Number">
   </div>
   <div class="form-group">
    <label>Marital Status</label>
    <div class="marital-status-options">
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Married" <?php if ($students->marital_status === 'Married') echo 'checked'; ?>>
            <span>Married</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Unmarried" <?php if ($students->marital_status === 'Unmarried') echo 'checked'; ?>>
            <span>Unmarried</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Other" <?php if ($students->marital_status === 'Other') echo 'checked'; ?>>
            <span>Other</span>
        </label>
    </div>
</div>
<div class="form-group">
    <label>Category</label>
    <div class="category-options">
        <label class="radio-option">
            <input type="radio" name="category" value="General" <?php if ($students->category === 'General') echo 'checked'; ?>>
            <span>General</span>
        </label>
        <label class="radio-option">
        <input type="radio" name="category" value="ST" <?php if ($students->category === 'ST') echo 'checked'; ?>>
            <span>ST</span>
        </label>
        <label class="radio-option">
        <input type="radio" name="category" value="SC" <?php if ($students->category === 'SC') echo 'checked'; ?>>
            <span>SC</span>
        </label>
        <label class="radio-option">
        <input type="radio" name="category" value="OBC" <?php if ($students->category === 'OBC') echo 'checked'; ?>>
            <span>OBC</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="address">Address</label>
      <input type="text" name="address" class="form-control" id="address" value="{{ $students->address}}" placeholder="Address">
   </div>
   <div class="form-group">
      <label for="district">District</label>
      <select name="district" class="form-control" id="district">
         <option value="" disabled selected>Select District</option>
         <option value="Bilaspur" @if($students->district == 'Bilaspur') selected @endif>Bilaspur</option>
         <option value="Chamba" @if($students->district == 'Chamba') selected @endif>Chamba</option>
         <option value="Hamirpur" @if($students->district == 'Hamirpur') selected @endif>Hamirpur</option>
         <option value="Kangra" @if($students->district == 'Kangra') selected @endif>Kangra</option>
         <option value="Kinnaur" @if($students->district == 'Kinnaur') selected @endif>Kinnaur</option>
         <option value="Kullu" @if($students->district == 'Kullu') selected @endif>Kullu</option>
         <option value="Lahaul and Spiti" @if($students->district == 'Lahaul and Spiti') selected @endif>Lahaul and Spiti</option>
         <option value="Mandi" @if($students->district == 'Mandi') selected @endif>Mandi</option>
         <option value="Shimla" @if($students->district == 'Shimla') selected @endif>Shimla</option>
         <option value="Sirmaur" @if($students->district == 'Sirmaur') selected @endif>Sirmaur</option>
         <option value="Solan" @if($students->district == 'Solan') selected @endif>Solan</option>
         <option value="Una" @if($students->district == 'Una') selected @endif>Una</option>
      </select>
   </div>
   <div class="form-group">
      <label for="state">State</label>
      <select name="state" class="form-control" id="state">
         <option value="" disabled selected>Select State</option>
         <option value="Andhra Pradesh" @if($students->state == 'Andhra Pradesh') selected @endif>Andhra Pradesh</option>
         <option value="Arunachal Pradesh" @if($students->state == 'Arunachal Pradesh') selected @endif>Arunachal Pradesh</option>
         <option value="Assam" @if($students->state == 'Assam') selected @endif>Assam</option>
         <option value="Bihar" @if($students->state == 'Bihar') selected @endif>Bihar</option>
         <option value="Chhattisgarh" @if($students->state == 'Chhattisgarh') selected @endif>Chhattisgarh</option>
         <option value="Goa" @if($students->state == 'Goa') selected @endif>Goa</option>
         <option value="Gujarat" @if($students->state == 'Gujarat') selected @endif>Gujarat</option>
         <option value="Haryana" @if($students->state == 'Haryana') selected @endif>Haryana</option>
         <option value="Himachal Pradesh" @if($students->state == 'Himachal Pradesh') selected @endif>Himachal Pradesh</option>
         <option value="Jharkhand" @if($students->state == 'Jharkhand') selected @endif>Jharkhand</option>
         <option value="Karnataka" @if($students->state == 'Karnataka') selected @endif>Karnataka</option>
         <option value="Kerala" @if($students->state == 'Kerala') selected @endif>Kerala</option>
         <option value="Madhya Pradesh" @if($students->state == 'Madhya Pradesh') selected @endif>Madhya Pradesh</option>
         <option value="Maharashtra" @if($students->state == 'Maharashtra') selected @endif>Maharashtra</option>
         <option value="Manipur" @if($students->state == 'Manipur') selected @endif>Manipur</option>
         <option value="Meghalaya" @if($students->state == 'Meghalaya') selected @endif>Meghalaya</option>
         <option value="Mizoram" @if($students->state == 'Mizoram') selected @endif>Mizoram</option>
         <option value="Nagaland" @if($students->state == 'Nagaland') selected @endif>Nagaland</option>
         <option value="Odisha" @if($students->state == 'Odisha') selected @endif>Odisha</option>
         <option value="Punjab" @if($students->state == 'Punjab') selected @endif>Punjab</option>
         <option value="Rajasthan" @if($students->state == 'Rajasthan') selected @endif>Rajasthan</option>
         <option value="Sikkim" @if($students->state == 'Sikkim') selected @endif>Sikkim</option>
         <option value="Tamil Nadu" @if($students->state == 'Tamil Nadu') selected @endif>Tamil Nadu</option>
         <option value="Telangana" @if($students->state == 'Telangana') selected @endif>Telangana</option>
         <option value="Tripura" @if($students->state == 'Tripura') selected @endif>Tripura</option>
         <option value="Uttar Pradesh" @if($students->state == 'Uttar Pradesh') selected @endif>Uttar Pradesh</option>
         <option value="Uttarakhand" @if($students->state == 'Uttarakhand') selected @endif>Uttarakhand</option>
         <option value="West Bengal" @if($students->state == 'West Bengal') selected @endif>West Bengal</option>
         <option value="Andaman and Nicobar Islands" @if($students->state == 'Andaman and Nicobar Islands') selected @endif>Andaman and Nicobar Islands</option>
         <option value="Chandigarh" @if($students->state == 'Chandigarh') selected @endif>Chandigarh</option>
         <option value="Dadra and Nagar Haveli and Daman and Diu" @if($students->state == 'Dadra and Nagar Haveli and Daman and Diu') selected @endif>Dadra and Nagar Haveli and Daman and Diu</option>
         <option value="Lakshadweep" @if($students->state == 'Lakshadweep') selected @endif>Lakshadweep</option>
         <option value="Delhi" @if($students->state == 'Delhi') selected @endif>Delhi</option>
         <option value="Puducherry" @if($students->state == 'Puducherry') selected @endif>Puducherry</option>
         <option value="Ladakh" @if($students->state == 'Ladakh') selected @endif>Ladakh</option>
         <option value="Jammu and Kashmir" @if($students->state == 'Jammu and Kashmir') selected @endif>Jammu and Kashmir</option>
      </select>
   </div>
   <?php $qualification = explode(",", $students['qualification']); ?>
<div class="form-group">
    <label>Qualification</label>
    <div class="qualification-options">
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="12th" <?php if(in_array('12th', $qualification)){ echo 'checked="checked"'; } ?>>
            <span>12th</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="12th Pursuing" <?php if(in_array('12th Pursuing', $qualification)){ echo 'checked="checked"'; } ?>>
            <span>12th Pursuing</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Graduation" <?php if(in_array('Graduation', $qualification)){ echo 'checked="checked"'; } ?>>
            <span>Graduation</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Graduation Pursuing" <?php if(in_array('Graduation Pursuing', $qualification)){ echo 'checked="checked"'; } ?>>
            <span>Graduation Pursuing</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Other" <?php if(in_array('Other', $qualification)){ echo 'checked="checked"'; } ?>>
            <span>Other</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="course_type">Course Type</label>
      <select class="form-control" name="course_type" id="Course Type">
         <option value ="" disabled selected>Select Course Type</option>
         <option value="Designing" @if($students->course_type == 'Designing') selected @endif>Designing</option>
         <option value="Php" @if($students->course_type == 'Php') selected @endif>PHP</option>
         <option value="Graphic" @if($students->course_type == 'Graphic') selected @endif>Graphic</option>
      </select>
   </div>
   <div class="form-group">
      <label for="course_duration">Course Duration</label>
      <select class="form-control" name="course_duration" id="Course Duration">
         <option value ="" disabled selected>Select Course Duration</option>
         <option value="2 Month" @if($students->course_duration == '2 Month') selected @endif>2 Month</option>
         <option value="6 Month" @if($students->course_duration == '6 Month') selected @endif>6 Month</option>
         <option value="1 Year" @if($students->course_duration == '1 Year') selected @endif>1 Year</option>
      </select>
   </div>
   <div class="form-group">
      <label for="course_joining_date">Course Joining Date</label>
      <input type="date" name="course_joining_date" class="form-control" id="date" value="{{ $students->course_joining_date}}" placeholder="Course Joining Date">
   </div>
   <div class="form-group">
      <label for="course_complession_date">Course Complession Date</label>
      <input type="date" name="course_complession_date" class="form-control" id="date" value="{{ $students->course_complession_date}}" placeholder="Course Complession Date">
   </div>
   <div class="form-group">
      <label for="total_fees">Total fees</label>
      <input type="text" name="total_fees" class="form-control" id="total_fees" value="{{ $students->total_fees}}" placeholder="Total fees">
   </div>
   <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <div class="input-group">
         <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
         </div>
         <div class="input-group-append">
            <span class="input-group-text">Upload</span>
         </div>
      </div>
      <br>
      @if(!empty($students->user_pic) && file_exists(public_path('uploads/users/'.$students->user_pic)))
      <img src = "{{ url('public/uploads/users/'. $students->user_pic)}}" width="120px" height="100px" alt="">
      @endif<br><br>
   </div>
   <div class="form-group">
      <label for="user_status">Status</label>
      <select class="form-control" name="user_status" id="User Status">
         <option value ="" disabled selected>Select Status Type</option>
         <option value="Active" @if($students->user_status == 'Active') selected @endif>Active</option>
         <option value="Pending" @if($students->user_status == 'Pending') selected @endif>Pending</option>
         <option value="Suspend" @if($students->user_status == 'Suspend') selected @endif>Suspend</option>
      </select>
   </div>
   <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
   </div>
   <button type="submit" name="submit" class="btn btn-primary">Update</button>
   <input type="reset" class="reset" name="reset" value="Cancel">
</form>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      //Father Mobile Number
      const fatherPhoneNoInput = document.getElementById('father_phone_no');
      fatherPhoneNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, ''); 
         const truncatedValue = numericValue.slice(0, 10);
         event.target.value = truncatedValue;
      });
   
      //Student Mobile Number
      const studentPhoneNoInput = document.getElementById('student_phone_no');
      studentPhoneNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, ''); 
         const truncatedValue = numericValue.slice(0, 10); 
         event.target.value = truncatedValue;
      });
   
      //Aadhar Number
      const aadharNoInput = document.getElementById('aadhar_no');
      aadharNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, '');
         const truncatedValue = numericValue.slice(0, 12);
         event.target.value = truncatedValue;
      });
   
      //Total Fees
      const totalFeesInput = document.getElementById('total_fees');
      totalFeesInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, '');
         event.target.value = numericValue;
      });
   });
</script>
@endsection