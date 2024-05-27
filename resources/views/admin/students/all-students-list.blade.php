@extends('layouts.master')
@section('content')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<style>
   .notifaction-green {
   color: green;
   }
   .notification-red {
   color: red;
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
   <h3 class="card-title">All Students List</h3>
</div>
<table class="table table-bordered" id="main_form">
   <thead>
      <tr>
         <th>Sr.No</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Father Name</th>
         <th>Email</th>
         <th>Date Of Birth</th>
         <th>Address</th>
         <th>Aadhaar No</th>
         <th>Phone No</th>
         <th>Course</th>
         <th>Joining Date</th>
         <th>End Date</th>
         <th>Total Fees</th>
         <th>Course Duration</th>
         <th>Image</th>
         <th>Status</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @php $count = 1; @endphp
      @foreach($get_students_detail as $student)
      <tr>
         <td>{{ $count++ }}</td>
         <td>{{ $student->first_name }}</td>
         <td>{{ $student->last_name }}</td>
         <td>{{ $student->father_name }}</td>
         <td>{{ $student->email }}</td>
         <td>{{ $student->dob }}</td>
         <td>{{ $student->address }}</td>
         <td>{{ $student->aadhaar_no }}</td>
         <td>{{ $student->phone_no }}</td>
         <td>{{ $student->course_type }}</td>
         <td>{{ $student->joining_date }}</td>
         <td>{{ $student->end_date }}</td>
         <td>{{ $student->total_fees }}</td>
         <td>{{ $student->course_duration }}</td>
         <td>
            @if(!empty($student->user_pic) && file_exists(public_path('uploads/users/'.$student->user_pic)))
            <img src = "{{ url('public/uploads/users/'. $student->user_pic)}}" width="60px" height="40px" alt="">
            @endif
         </td>
         <td>{{ $student->user_status }}</td>
         <td>
            <a class="btn btn-info btn-sm" href="{{ url('admin/edit-student',$student->id) }}">
            <i class="fas fa-pencil-alt"></i> Edit
            </a> ||
            <a class="btn btn-danger btn-sm" href="{{ url('admin/delete-student',$student->id) }}">
            <i class="fas fa-trash"></i> Delete
            </a>
         </td>
      </tr>
      @endforeach
      <script>
         var baseUrl = "{{ url('/') }}"; 
      </script>
      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script>
         $(document).ready(function() {
         	 $('#main_form').DataTable();
           });
      </script> 
   </tbody>
</table>
@endsection