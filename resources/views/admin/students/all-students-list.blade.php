@extends('layouts.master')
@section('content') 
 

<div class="space-remove">
        </div>

<div class="title-subheading">
            <h2>All Students</h2>
        </div>

        <div class="main-table">

            <div class="data-table-listing">
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
                </div>
                <div class="btn-pixxelu">
                    <a href="{{ url('admin/add-new-student') }}"><i class="fa-solid fa-plus"></i>Add New Student</a>
                </div>
            </div>
            <div class="scrolling-data-table">
                <table class="rwd-table">
                    <tbody>
                        <tr class="data-table">
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
                        <tr>
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="student-card">
                                        <img src="images/d1.png" alt="Student Image">
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
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                1
                            </td>
                            <td data-th="Student ID" id="openModalBtn">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                2
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>
                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                3
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="red-color">
                                <span>Pending</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>
                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                4
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>
                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                5
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="red-color">
                                <span>Pending</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                6
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                7
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Already Paid" class="red-color">
                                <span>Pending</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                8
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                9
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Pending" class="red-color">
                                <span>Pending</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                10
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>




                        <tr>
                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                11
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Aadhar No" class="green-color">
                                <span>Already Paid</span>
                            </td>
                            <td data-th="Aadhar No">
                                <img src="images/ellips.svg" alt="ellips" />
                            </td>
                        </tr>



                        <tr id="openModalBtn">

                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p>This is a modal popup!</p>
                                </div>
                            </div>


                            <td data-th="">
                                <input type="checkbox">
                            </td>
                            <td data-th="S. No">
                                12
                            </td>
                            <td data-th="Student ID">
                                0001
                            </td>
                            <td data-th="Image">
                                <img src="images/d1.png">
                            </td>
                            <td data-th="Name">
                                Princess Petal
                            </td>
                            <td data-th="Phone No">
                                7894561230
                            </td>
                            <td data-th="Email">
                                dummy@gmail.com
                            </td>
                            <td data-th="Aadhar No">
                                4444 5520 1245
                            </td>
                            <td data-th="Aadhar No">
                                Web Design
                            </td>
                            <td data-th="Aadhar No">
                                10 May 2024
                            </td>
                            <td data-th="Aadhar No">
                                ₹ 60,000
                            </td>
                            <td data-th="Aadhar No">
                                06 Months
                            </td>
                            <td data-th="Aadhar No">
                                5000<br>10 May 2024
                            </td>
                            <td data-th="Pending" class="red-color">
                                <span>Pending</span>
                            </td>


                            <td class="action">
                                <div class="drop-action">
                                    <div class="dropdown keep-open">
                                        <button id="dLabel" role="button" href="#" data-toggle="dropdown"
                                            data-target="#" class="btn btn-primary">
                                            <img src="images/ellips.svg" alt="ellips" /> <span class="caret"></span>
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
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

       
@endsection