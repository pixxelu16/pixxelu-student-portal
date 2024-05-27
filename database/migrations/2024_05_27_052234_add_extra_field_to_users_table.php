<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('remember_token')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('father_name')->after('last_name')->nullable();
            $table->date('dob')->after('father_name')->nullable();
            $table->string('address')->after('dob')->nullable();
            $table->string('aadhaar_no')->after('address')->nullable();
            $table->string('phone_no')->after('aadhaar_no')->nullable();
            $table->enum('course_type', ['Designing','Php','Graphic'])->default('Php')->after('phone_no')->nullable();
            $table->date('joining_date')->after('course_type')->nullable();
            $table->date('end_date')->after('joining_date')->nullable();
            $table->string('total_fees')->after('end_date')->nullable();
            $table->string('course_duration')->after('total_fees')->nullable(); 
            $table->string('user_pic')->after('course_duration')->nullable();
            $table->enum('user_status', ['Active','Pending','Suspend'])->default('Active')->after('user_pic')->nullable();
            $table->enum('user_type', ['Super_Admin','Admin','Student','Employee','Subscriber'])->default('Admin')->after('user_status')->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
