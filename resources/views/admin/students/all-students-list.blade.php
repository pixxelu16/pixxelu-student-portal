@extends('layouts.master')
@section('content') 
<div class="space-remove"></div>
<div class="title-subheading">
   <h2>All Students</h2>
</div>
<div class="main-table">
   <div class="data-table-listing">
      <!--
         <div class="dropdown-column">
            <div class="dropdown-date">
               <input type="date" value="2023-10-21" />
            </div>
            <div class="dropdown-Filter">
               <input type="Filter" value="Filter">
            </div>
         </div>
         <div class="dropdown-Search">
            <div class="search-container">
               <input type="text" class="search-input" placeholder="Search">
               <button type="submit" class="search-icon">
               <img src="{{ url('public/admin/images/search.svg') }}" alt="search">
               </button>
            </div>
         </div>-->
      <div class="btn-pixxelu">
         <a href="{{ url('admin/add-new-student') }}"><i class="fa-solid fa-plus"></i>Add New Student</a>
      </div>
   </div>
   <div class="scrolling-data-table">
      <table id="example1" class="rwd-table">
         <thead>
            <tr>
               <th></th>
               <th>S. No</th>
               <th>Student ID</th>
               <th>Image</th>
               <th>Name</th>
               <th>Phone No</th>
               <th>Email</th>
               <th>Aadhar No</th>
               <th>Course</th>
               <th>Joining Date</th>
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
               <!--<div id="myModal" class="modal">
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
                  </div> -->
               <td data-th="">
                  <input type="checkbox">
               </td>
               <td>{{ $count++ }}</td>
               <td data-th="Student ID" id="openModalBtn">
                  {{ $student->id }}
               </td>
               <td data-th="Image">
                  @if(!empty($student->user_pic) && file_exists(public_path('uploads/users/'.$student->user_pic)))
                  <img src = "{{ url('public/uploads/users/'. $student->user_pic)}}" width="60px" height="40px" alt="">
                  @endif
               </td>
               <td data-th="Name">
                  {{ $student->name }}
               </td>
               <td data-th="Phone No">
                  {{ $student->student_phone_no }}
               </td>
               <td data-th="Email">
                  {{ $student->email }}
               </td>
               <td data-th="Aadhar No">
                  {{ $student->aadhaar_no }}
               </td>
               <td data-th="course">
                  {{ $student->course_type }}
               </td>
               <td data-th="Course Joining Date">
                  {{ $student->course_joining_date }}
               </td>
               <td data-th="total fess">
                  {{ $student->total_fees }}
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
                  <img src="{{ url('public/admin/images/ellips.svg') }}" alt="ellips" />
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
                        </ul>
                     </div>
                  </div>
                  </td> -->
            </tr>
            @endforeach
         </tbody>
      </table>
      <div id="myModal" class="modal">
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close">&times;</span>
            <p>This is a modal popup!</p>
         </div>
      </div>
   </div>
</div>
@endsection