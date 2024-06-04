@extends('layouts.master')
@section('content')
<div class="space-remove"></div>
<div class="title-subheading">
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
   <h2>All Students Listing</h2>
</div>
<div class="main-table">
   <div class="data-table-listing">
      <div class="btn-pixxelu">
         <a href="{{ url('admin/add-new-student') }}"><i class="fa-solid fa-plus"></i>Add New Student</a>
      </div>
   </div>
   <div class="scrolling-data-table">
      <table id="example1" class="rwd-table cloud-path">
         <thead>
            <tr>
               
               <th>S. No</th>
               <th>Student ID</th>
               <th>Image</th>
               <th>Name</th>
               <th>Email</th>
               <th>Phone No</th>
               <!-- <th>Aadhar No</th> -->
               <th>Course</th>
               <th>Joining Date</th>
               <!-- <th>Batch Timing</th> -->
               <th>Complession Date</th>
               <th>Total Fees</th>
               <th>Course Duration</th>
               <th>Last paid Fees</th>
               <th>Status</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @php $count = 1; @endphp
            @foreach($get_students_detail as $student)

            <tr>

            <tr>              
               <td data-th=""><input type="checkbox"></td>

               <td>{{ $count++ }}</td>
               <td>{{ $student->id }}</td>
               <td>
                  @if($student->user_pic)
                  <img src = "{{ url('public/uploads/users/'. $student->user_pic)}}" width="60px" height="40px" alt="">
                  @endif
               </td>

               <td data-th="Name">
                  {{ $student->name }}
               </td>
               <td data-th="Email">
                  {{ $student->email }}
               </td>
               <td data-th="Phone No">
                  {{ $student->student_phone_no }}
               </td>
               <!-- <td data-th="Aadhar No">
                  {{ $student->aadhaar_no }}
               </td> -->
               <td data-th="course">
                  {{ $student->course_type }}
               </td>
               <td data-th="Course Joining Date">
                  {{ $student->course_joining_date }}
               </td>
               <!-- <td data-th="batch timing">
                  {{ $student->batch_timing }}
               </td> -->
               <td data-th="Course end Date">
                  {{ $student->course_complession_date }}
               </td>


               <td data-th="total fess">
                  {{ $student->total_fees }}

                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle pay-fee-design" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pay Fee
                     </button>
                     <ul class="dropdown-menu pay-fees-submit">
                        <form>
                           <li class="pay-list-submit">
                              <input type="text" id="feesAmount" name="feesAmount" min="0" step="0.01">
                              <button onclick="calculateTotal()">Save</button>
                           </li>
                        </form>
                     </ul>
                  </div>
               </td>

               <td data-th="Course Duration">
                  {{ $student->course_duration }}
               </td>
               <td data-th="Last Paid Fees">
                  5000<br>10 May 2024
               </td>
               <td data-th="Status" class="green-color">
                  <span>Already Paid</span>
               </td>
               <td data-th="Aadhar No">

               <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle action-fee-design" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ url('public/admin/images/ellips.svg') }}" alt="ellips" />
                     </button>
                     <ul class="dropdown-menu pay-fees-submit">
                        <form>
                           <li class="pay-list-submit">
                           <a class="btn btn-info btn-sm" href="{{ url('admin/edit-student',$student->id) }}">
                           <i class="fas fa-pencil-alt"></i> Edit
                           </a>
                           <a class="btn btn-danger btn-sm" href="{{ url('admin/delete-student',$student->id) }}">
                           <i class="fas fa-trash"></i> Delete
                           </a>

               <td>{{ $student->name }}</td>
               <td>{{ $student->student_phone_no }}</td>
               <td>{{ $student->email }}</td>
               <td>{{ $student->aadhaar_no }}</td>
               <td>{{ $student->course_type }}</td>
               <td>{{ $student->course_joining_date }}</td>
               <td>{{ $student->batch_timing }}</td>
               <td>{{ $student->course_complession_date }}</td>
               <td>{{ $student->total_fees }}</td>
               <td>{{ $student->course_duration }}</td>
               <td>5000<br>10 May 2024</td>
               <td class="green-color"><span>Already Paid</span></td>
               <td>
                  <img src="{{ url('public/admin/images/ellips.svg') }}" alt="ellips" />
                  <a class="btn btn-info btn-sm" href="{{ url('admin/edit-student',$student->id) }}">
                  <i class="fas fa-pencil-alt"></i> Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="{{ url('admin/delete-student',$student->id) }}">
                  <i class="fas fa-trash"></i> Delete
                  </a>
               </td>
               <!-- <td class="action">
                  <div class="drop-action">
                     <div class="dropdown keep-open">
                        <button id="dLabel" role="button" href="#" data-toggle="dropdown"
                           data-target="#" class="btn btn-primary">
                        <img src="{{ url('public/admin/images/ellips.svg') }}" alt="ellips" /> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                           <li><a href="#"><span class="icon-set clone"><i
                              class="fa-regular fa-clone"></i></span>Clone</a></li>
                           <li><a href="#"><span class="icon-set clone"><i
                              class="fa-regular fa-pen-to-square"></i></span>Edit</a>
                           </li>
                           <li><a href="#"><span class="icon-set clone"><i
                              class="fa-solid fa-box-archive"></i></span>Archive</a>

                           </li>
                        </form>
                     </ul>
                  </div>

               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
               <div id="myModal" class="modal">
                  <div class="modal-content">
                     <span class="close">&times;</span>
                     <div class="student-card">
                        <img src="{{ url('public/admin/images/d1.png') }}" alt="Student Image">
                        <div class="student-info">
                           <div><span>Student ID:</span> 001</div>
                           <div><span>Name:</span> John Doe</div>
                           <div><span>Phone No:</span> +1234567890</div>
                           <div><span>Email:</span> john.doe@example.com</div>
                           <div><span>Aadhar No:</span> 1234-5678-9012</div>
                           <div><span>Course:</span> Computer Science</div>
                           <div><span>Joining Date:</span> 2021-08-15</div>
                           <div><span>Total Fees:</span> $2000</div>
                           <div><span>Course Duration:</span> 4 Years</div>
                           <div><span>Last paid Fees:</span> $500</div>
                           <div><span>Status:</span> Active</div>
                        </div>
                     </div>
                  </div>
                  </div> 
               </div>
            </div>
@endsection