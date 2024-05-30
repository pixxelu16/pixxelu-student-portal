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
   <h3 class="card-title">Add New Student</h3>
</div>
<form action="{{ route('admin.submit.student.admin') }}" Method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group">
   <label for="first_name">First Name</label>
   <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
   <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
   </div>
   <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
   </div>
   <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="dob">Date Of Birth</label>
      <input type="date" name="dob" class="form-control" id="date" placeholder="Date Of Birt">
   </div>
   <div class="form-group">
    <label>Gender</label>
    <div class="gender-options">
        <label class="radio-option">
            <input type="radio" name="gender" value="Male" checked>
            <span>Male</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="gender" value="Female">
            <span>Female</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="father_name">Father Name</label>
      <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father Name">
   </div>
   <div class="form-group">
      <label for="father_phone_no">Father Mobile Number</label>
      <input type="text" name="father_phone_no" class="form-control" id="father_phone_no" placeholder="Father Mobile Number">
   </div>
   <div class="form-group">
      <label for="aadhar_no">Aadhar Number</label>
      <input type="text" name="aadhaar_no" class="form-control" id="aadhar_no" placeholder="Aadhar Number">
   </div>
   <div class="form-group">
      <label for="student_phone_no">Student Mobile Number</label>
      <input type="text" name="student_phone_no" class="form-control" id="student_phone_no" placeholder="Student Mobile Number">
   </div>
   <div class="form-group">
    <label>Marital Status</label>
    <div class="marital-status-options">
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Married" checked>
            <span>Married</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Unmarried">
            <span>Unmarried</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="marital_status" value="Other">
            <span>Other</span>
        </label>
    </div>
</div>
<div class="form-group">
    <label>Category</label>
    <div class="category-options">
        <label class="radio-option">
            <input type="radio" name="category" value="General" checked>
            <span>General</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="category" value="ST">
            <span>ST</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="category" value="SC">
            <span>SC</span>
        </label>
        <label class="radio-option">
            <input type="radio" name="category" value="OBC">
            <span>OBC</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="address">Address</label>
      <input type="text" name="address" class="form-control" id="address" placeholder="Address">
   </div>
   <div class="form-group">
      <label for="district">District</label>
      <select name="district" class="form-control" id="district">
         <option value="" disabled selected>Select District</option>
         <option value="Bilaspur">Bilaspur</option>
         <option value="Chamba">Chamba</option>
         <option value="Hamirpur">Hamirpur</option>
         <option value="Kangra">Kangra</option>
         <option value="Kinnaur">Kinnaur</option>
         <option value="Kullu">Kullu</option>
         <option value="Lahaul and Spiti">Lahaul and Spiti</option>
         <option value="Mandi">Mandi</option>
         <option value="Shimla">Shimla</option>
         <option value="Sirmaur">Sirmaur</option>
         <option value="Solan">Solan</option>
         <option value="Una">Una</option>
      </select>
   </div>
   <div class="form-group">
      <label for="state">State</label>
      <select name="state" class="form-control" id="state">
         <option value="" disabled selected>Select State</option>
         <option value="Andhra Pradesh">Andhra Pradesh</option>
         <option value="Arunachal Pradesh">Arunachal Pradesh</option>
         <option value="Assam">Assam</option>
         <option value="Bihar">Bihar</option>
         <option value="Chhattisgarh">Chhattisgarh</option>
         <option value="Goa">Goa</option>
         <option value="Gujarat">Gujarat</option>
         <option value="Haryana">Haryana</option>
         <option value="Himachal Pradesh">Himachal Pradesh</option>
         <option value="Jharkhand">Jharkhand</option>
         <option value="Karnataka">Karnataka</option>
         <option value="Kerala">Kerala</option>
         <option value="Madhya Pradesh">Madhya Pradesh</option>
         <option value="Maharashtra">Maharashtra</option>
         <option value="Manipur">Manipur</option>
         <option value="Meghalaya">Meghalaya</option>
         <option value="Mizoram">Mizoram</option>
         <option value="Nagaland">Nagaland</option>
         <option value="Odisha">Odisha</option>
         <option value="Punjab">Punjab</option>
         <option value="Rajasthan">Rajasthan</option>
         <option value="Sikkim">Sikkim</option>
         <option value="Tamil Nadu">Tamil Nadu</option>
         <option value="Telangana">Telangana</option>
         <option value="Tripura">Tripura</option>
         <option value="Uttar Pradesh">Uttar Pradesh</option>
         <option value="Uttarakhand">Uttarakhand</option>
         <option value="West Bengal">West Bengal</option>
         <option value="Andaman and Nicobar Island">Andaman and Nicobar Islands</option>
         <option value="Chandigarh">Chandigarh</option>
         <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
         <option value="Lakshadweep">Lakshadweep</option>
         <option value="Delhi">Delhi</option>
         <option value="Puducherry">Puducherry</option>
         <option value="Ladakh">Ladakh</option>
         <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      </select>
   </div>
   <div class="form-group">
    <label>Qualification</label>
    <div class="qualification-options">
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="12th">
            <span>12th</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="12th Pursuing">
            <span>12th Pursuing</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Graduation">
            <span>Graduation</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Graduation Pursuing">
            <span>Graduation Pursuing</span>
        </label>
        <label class="checkbox-option">
            <input type="checkbox" name="qualification[]" value="Other">
            <span>Other</span>
        </label>
    </div>
</div>
   <div class="form-group">
      <label for="course_type">Course Type</label>
      <select class="form-control" name="course_type" id="Course Type">
         <option value ="" disabled selected>Select Course Type</option>
         <option value="Designing">Designing</option>
         <option value="Php">PHP</option>
         <option value="Graphic">Graphic</option>
      </select>
   </div>
   <div class="form-group">
      <label for="course_duration">Course Duration</label>
      <select class="form-control" name="course_duration" id="Course Duration">
         <option value ="" disabled selected>Select Course Duration</option>
         <option value="2 Month">2 Month</option>
         <option value="6 Month">6 Month</option>
         <option value="1 Year">1 Year</option>
      </select>
   </div>
   <div class="form-group">
      <label for="course_joining_date">Course Joining Date</label>
      <input type="date" name="course_joining_date" class="form-control" id="date" placeholder="Course Joining Date">
   </div>
   <div class="form-group">
      <label for="course_complession_date">Course Complession Date</label>
      <input type="date" name="course_complession_date" class="form-control" id="date" placeholder="Course Complession Date">
   </div>
   <div class="form-group">
      <label for="total_fees">Total fees</label>
      <input type="text" name="total_fees" class="form-control" id="total_fees" placeholder="Total fees">
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
   </div>
   <div class="form-group">
      <label for="user_status">Status</label>
      <select class="form-control" name="user_status" id="User Status">
         <option value ="" disabled selected>Select Status Type</option>
         <option value="Active">Active</option>
         <option value="Pending">Pending</option>
         <option value="Suspend">Suspend</option>
      </select>
   </div>
   <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
   </div>
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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