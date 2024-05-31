@extends('layouts.master')
@section('content')


<div class="space-remove">
</div>

<div class="title-subheading">
    <h2>Staff</h2>
</div>

<div class="main-table">

    <h2>Add New Student</h2>

    <div class="login-form">
        <div class="small-12 medium-2 large-2 columns">
            <div class="circle">
                <img class="profile-pic" src="images/i2.svg" alt="ai">

            </div>
            <div class="p-image">
                <img src="images/i1.svg" class="upload-button">
                <input class="file-upload" type="file" accept="image/*" />
            </div>
        </div>


        <form>
            <div class="form-group">
                <div class="form-design first-name">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Enter name">
                </div>
                <div class="form-design last-name">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Enter name">
                </div>
            </div>
            <div class="form-group">
                <div class="form-design dob">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob">
                </div>
                <div class="form-design adhar-no">
                    <label for="aadhar">Aadhar Number</label>
                    <input type="number" id="aadhar" name="aadhar" placeholder="Enter aadhar number">
                </div>
            </div>
            <div class="form-group">
                <div class="form-design ph-no">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter phone number">
                </div>
                <div class="form-design mail">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address">
                </div>
            </div>
            <div class="form-group">
                <div class="form-design course">
                    <label for="course">Course</label>
                    <select id="course" name="course">
                        <option value="">Select course</option>
                        <!-- Add course options here -->
                    </select>
                </div>
                <div class="form-design duration">
                    <label for="duration">Course Duration</label>
                    <select id="duration" name="duration">
                        <option value="">Select Duration</option>
                        <!-- Add duration options here -->
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-design join-date">
                    <label for="joining-date">Joining Date</label>
                    <input type="date" id="joining-date" name="joining-date">
                </div>
                <div class="form-design fees">
                    <label for="total-fees">Total Fees</label>
                    <input type="number" id="total-fees" name="total-fees" placeholder="Enter amount">
                </div>
            </div>


            <div class="main-payment">
                <div class="payment-head">
                    <h3>Monthly Fees</h3>
                </div>
                <div class="form-group">
                    <div class="amount">
                        <label for="fees-amount">Fees Amount</label>
                        <input type="number" id="fees-amount" name="fees-amount" placeholder="Enter amount">
                    </div>
                    <div class="payment-date">
                        <label for="payment-date">Fees payment date</label>
                        <input type="date" id="payment-date" name="payment-date">
                    </div>
                </div>
            </div>
        </form>

        <div class="form-button">
            <div class="back-button">
                <a href="#">Back</a>
            </div>
            <div class="save-button">
                <a href="#">Save</a>
            </div>
        </div>
    </div>




</div>


@endsection