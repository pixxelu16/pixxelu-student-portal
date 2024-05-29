<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function for show employee dashboard
    public function dashboard(){
        return view('employee.dashboard');
    }
}
