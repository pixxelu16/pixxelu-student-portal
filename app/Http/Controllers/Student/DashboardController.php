<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function for show student dashboard
    public function dashboard(){
        return view('student.dashboard');
    }
}
