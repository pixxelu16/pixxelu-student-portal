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
   <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $students->first_name }}" placeholder="First Name">
   <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $students->last_name }}" placeholder="Last Name">
   </div>
   <div class="form-group">
      <label for="father_name">Father Name</label>
      <input type="text" name="father_name" class="form-control" id="father_name" value="{{ $students->father_name }}" placeholder="Last Name">
   </div>
   <div class="form-group">
      <label for="dob">Date Of Birth</label>
      <input type="date" name="dob" class="form-control" id="date" value="{{ $students->dob }}" placeholder="Date Of Birt">
   </div>
   <div class="form-group">
      <label for="aadhar_no">Aadhar Number</label>
      <input type="text" name="aadhaar_no" class="form-control" id="aadhar_no" value="{{ $students->aadhaar_no }}" placeholder="Aadhar Number">
   </div>
   <div class="form-group">
      <label for="address">Address</label>
      <input type="text" name="address" class="form-control" id="address" value="{{ $students->address }}" placeholder="Address">
   </div>
   <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control email-disabled" id="email" value="{{ $students->email }}" id="email" readonly placeholder="Email">
   </div>
   <div class="form-group">
      <label for="phone_no">Phone Number</label>
      <input type="text" name="phone_no" class="form-control" id="phone_no" value="{{ $students->phone_no }}" placeholder="Phone Number">
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
         <option value="" disabled selected>Select Course Duration</option>
         <option value="2 Month" @if($students->course_duration == '2 Month') selected @endif>2 Month</option>
         <option value="6 Month" @if($students->course_duration == '6 Month') selected @endif>6 Month</option>
         <option value="1 Year"  @if($students->course_duration == '1 Year') selected @endif>1 Year</option>
      </select>
   </div>
   <div class="form-group">
      <label for="total_fees">Total fees</label>
      <input type="text" name="total_fees" class="form-control" id="total_fees" value="{{ $students->total_fees }}" placeholder="Total fees">
   </div>
   <div class="form-group">
      <label for="joining_date">Joining Date</label>
      <input type="date" name="joining_date" class="form-control" id="date" value="{{ $students->joining_date }}" placeholder="Joining Date">
   </div>
   <div class="form-group">
      <label for="end_date">End Date</label>
      <input type="date" name="end_date" class="form-control" id="date" value="{{ $students->end_date }}" placeholder="End Date">
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
      <label for="user_status">User Status</label>
      <select class="form-control" name="user_status" id="User Status">
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
</form>
<script>
   document.addEventListener('DOMContentLoaded', function() {
       const phone_noInput = document.getElementById('phone_no');
       phone_noInput.addEventListener('input', function(event) {
           const inputValue = event.target.value;
           const numericValue = inputValue.replace(/\D/g, '');
           const truncatedValue = numericValue.slice(0, 10);
           event.target.value = truncatedValue;
       });
   });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
       const aadhar_noInput = document.getElementById('aadhar_no');
       aadhar_noInput.addEventListener('input', function(event) {
           const inputValue = event.target.value;
           const numericValue = inputValue.replace(/\D/g, '');
           const truncatedValue = numericValue.slice(0, 12);
           event.target.value = truncatedValue;
       });
   });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
       const totalFeesInput = document.getElementById('total_fees');
       totalFeesInput.addEventListener('input', function(event) {
           const inputValue = event.target.value;
           const numericValue = inputValue.replace(/\D/g, '');
           // Update the input field value
           event.target.value = numericValue;
       });
   });
</script>
@endsection