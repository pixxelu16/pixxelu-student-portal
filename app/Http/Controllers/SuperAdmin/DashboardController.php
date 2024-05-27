<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function for show super_admin
    public function dashboard(){
        return view('super-admin.dashboard');
    }
}
