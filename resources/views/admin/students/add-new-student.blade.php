@extends('layouts.master')
@section('content')
<style>
   .course_complession_date_disabled {
   background-color: #e9ecef; 
   color: #6c757d;          
   pointer-events: none;     
   cursor: not-allowed;      
   opacity: 0.6;             
   }
</style>
<div class="space-remove"></div>
<div class="title-subheading">
   <h2>Add New Student Record</h2>
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
   <div class="login-form">
      <form action="{{ route('admin.submit.student') }}" Method="POST" enctype="multipart/form-data">
         @csrf 
         <div class="small-12 medium-2 large-2 columns">
            <div class="circle">
               <img class="profile-pic" src="{{ url('public/admin/images/i2.svg') }}" alt="ai">
            </div>
            <div class="p-image">
               <img src="{{ url('public/admin/images/i1.svg') }}" class="upload-button">
               <input class="file-upload" type="file" name="image" accept="image/*" />
            </div>
         </div>
         <div class="form-group display-column">
            <div class="form-design first-name">
               <label for="first-name">First Name</label>
               <input type="text" id="first-name" name="first_name" placeholder="Enter First Name">
            </div>
            <div class="form-design last-name">
               <label for="last-name">Last Name</label>
               <input type="text" id="last-name" name="last_name" placeholder="Enter Last Name">
            </div>
            <div class="form-design mail">
               <label for="email">Email</label>
               <input type="email" id="email" name="email" placeholder="Enter email address">
            </div>
         </div>
         <div class="form-group display-column">
            <div class="form-design dob">
               <label for="dob">Date of Birth</label>
               <input type="date" id="dob" name="dob">
            </div>
            <div class="form-design father-name">
               <label for="father_name">Father Name</label>
               <input type="text" id="father_name" name="father_name" placeholder="Enter Father Name">
            </div>
            <div class="form-design phone-no">
               <label for="father_phone_no">Father Phone Number</label>
               <input type="text" id="father_phone_no" name="father_phone_no" placeholder="Enter Father Phone Number">
            </div>
         </div>
         <div class="form-group display-column">
            <div class="form-design aadhaar-no">
               <label for="aadhar_no">Aadhar Number</label>
               <input type="text" id="aadhar_no" name="aadhaar_no" placeholder="Enter Aaadhar Number">
            </div>
            <div class="form-design password">
               <label for="password">Password</label>
               <input type="password" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-design student-phone-no">
               <label for="student_phone_no">Student Phone Number</label>
               <input type="text" id="student_phone_no" name="student_phone_no" placeholder="Enter Student Phone Number">
            </div>
         </div>
         <div class="form-group display-column radio-btn-design">
            <div class="form-group">
               <label>Gender</label>
               <div class="form-design gender-options">

               <div class="gender male">
                  <input type="radio" name="gender" value="Male"  />
                  <span>Male</span>
               </div>
               <div class="gender male">  
                  <input type="radio" name="gender" value="Female">
                  <span>Female</span>
               </div>
            </div>
         </div>
         <div class="form-group">
            <label>Marital Status</label>
            <div class="form-design marital-status gender-options">
               <div class="gender male">  
                  <input type="radio" name="marital_status" value="Married">
                  <span>Married</span>
               </div>

               <div class="gender male">  
                  <input type="radio" name="marital_status" value="Unmarried">
                  <span>Unmarried</span>
               </div>

               <div class="gender male">  
                  <input type="radio" name="marital_status" value="Other">
                  <span>Other</span>

                  <div class="gender male">
                     <input type="radio" name="gender" value="Male" checked />
                     <span>Male</span>
                  </div>
                  <div class="gender male">  
                     <input type="radio" name="gender" value="Female">
                     <span>Female</span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label>Marital Status</label>
               <div class="form-design marital-status gender-options">
                  <div class="gender male">  
                     <input type="radio" name="marital_status" value="Married" checked>
                     <span>Married</span>
                  </div>
                  <div class="gender male">  
                     <input type="radio" name="marital_status" value="Unmarried">
                     <span>Unmarried</span>
                  </div>
                  <div class="gender male">  
                     <input type="radio" name="marital_status" value="Other">
                     <span>Other</span>
                  </div>

               </div>
            </div>
            <div class="form-design category">
               <label for="category">Category</label>
               <div class="form-design marital-status gender-options">
                  <div class="gender male"> 
                     <label class="radio-option">

                        <input type="radio" name="category" value="General">
                        <span>General</span>

                     <input type="radio" name="category" value="General" checked>
                     <span>General</span>

                     </label>
                  </div>
                  <div class="gender male">  
                     <label class="radio-option">
                     <input type="radio" name="category" value="ST">
                     <span>ST</span>
                     </label>
                  </div>
                  <div class="gender male">  
                     <label class="radio-option">
                     <input type="radio" name="category" value="SC">
                     <span>SC</span>
                     </label>
                  </div>
                  <div class="gender male">  
                     <label class="radio-option">
                     <input type="radio" name="category" value="OBC">
                     <span>OBC</span>
                     </label>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-design qualification">
            <label for="qualification">Qualification</label>
            <div class="qualification-ftp">
               <div class="checkbox-option">
                  <input type="checkbox" name="qualification[]" value="12th">
                  <span>12th</span>
               </div>
               <div class="checkbox-option">
                  <input type="checkbox" name="qualification[]" value="12th_Pursuing">
                  <span>12th Pursuing</span>
               </div>
               <div class="checkbox-option">
                  <input type="checkbox" name="qualification[]" value="Graduation">
                  <span>Graduation</span>
               </div>
               <div class="checkbox-option">
                  <input type="checkbox" name="qualification[]" value="Graduation_Pursuing">
                  <span>Graduation Pursuing</span>
               </div>
               <div class="checkbox-option">
                  <input type="checkbox" name="qualification[]" value="Other">
                  <span>Other</span>
               </div>
            </div>
         </div>
         <div class="form-group display-column">
         <div class="form-design state">
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
            
            <div class="form-design district">
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

            <div class="form-design address">
               <label for="address">Address</label>
               <input type="text" id="address" name="address" placeholder="Enter Address">
            </div>
         </div>
         <div class="form-group display-column">
            <div class="form-design pin-code">
               <label for="pin_code">Pin Code</label>
               <input type="text" id="pin_code" name="pin_code" placeholder="Enter Pin Code">
            </div>

            <div class="form-design end-date">
               <label for="course_complession_date">Course Complession Date</label>
               <input type="date" id="course_complession_date" class="course_complession_date_disabled" name="course_complession_date">
            </div>

            <div class="form-design course">
               <label for="course_type">Course Type</label>
               <select class="form-control" name="course_type" id="Course Type">
                  <option value ="" disabled selected>Select Course Type</option>
                  <option value="Designing">Designing</option>
                  <option value="Php">PHP</option>
                  <option value="Graphic">Graphic</option>
               </select>
            </div>

         </div>
         <div class="form-group display-column">

            <div class="form-design duration">
               <label for="course_duration">Course Duration</label>
               <select class="form-control" name="course_duration" id="Course Duration">
                  <option value ="" disabled selected>Select Course Duration</option>
                  <option value="2 Month">2 Month</option>
                  <option value="6 Month">6 Month</option>
                  <option value="1 Year">1 Year</option>
                  <option value="2 Year">2 Year</option>
               </select>
            </div>

         </div>

         <div class="form-group display-column">

            <div class="form-design join-date">
               <label for="course_joining_date">Course Joining Date</label>
               <input type="date" id="course_joining_date" name="course_joining_date">
            </div>

            <div class="form-design end-date">
               <label for="course_complession_date">Course Complession Date</label>
               <input type="date" id="course_complession_date" name="course_complession_date">
            </div>

            <div class="form-design batch-timing">
               <label for="batch_timing">Batch Timing</label>
               <select id="batch_timing" name="batch_timing" class="form-control">
                  <option value ="" disabled selected>Select Batch Timing</option>
                  <option value="10:00 to 2:00">10:00 to 2:00</option>
                  <option value="2:00 to 6:00">2:00 to 6:00</option>
               </select>
            </div>
         </div>
         <div class="form-group display-column">
            <div class="form-design status">
               <label for="total-fees">Total Fees</label>
               <input type="text" id="total_fees" name="total_fees" placeholder="Enter amount">
            </div>
            <div class="form-design fees">
               <label for="user_status">Status</label>
               <select class="form-control" name="user_status" id="User Status">
                  <option value ="" disabled selected>Select Status Type</option>
                  <option value="Active">Active</option>
                  <option value="Pending">Pending</option>
                  <option value="Suspend">Suspend</option>
               </select>
            </div>
         </div>
         <div class="form-button">
            <div class="back-button">
               <input type="submit" class="btn btn-success" name="submit" value="Submit">
            </div>
         </div>
      </form>
   </div>
</div>
@endsection