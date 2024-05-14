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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('personnel_id')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('name_ext');
            $table->enum('sex', ['male', 'female']);
            $table->enum('civil_status', ['single', 'married', 'widowed', 'divorced', 'others']);
            $table->string('citizenship');
            $table->string('blood_type')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('email')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('mobile_no')->nullable();

            $table->date('employment_start')->nullable();
            $table->date('employment_end')->nullable();
            $table->integer('salary_grade')->nullable();
            $table->integer('step')->nullable();
            $table->string('job_title')->nullable();
            $table->enum('job_status', ['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation', 'contract', 'part-time']);
            $table->string('tin')->nullable();
            $table->string('sss_num')->nullable();
            $table->string('gsis_num')->nullable();
            $table->string('philhealth_num')->nullable();
            $table->string('pagibig_num')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
