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
            $table->enum('sex', ['male', 'female']);
            $table->enum('civil_status', ['single', 'married', 'widowed', 'divorced', 'others']);
            $table->string('citizenship');
            $table->string('blood_type')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('email');
            $table->string('tel_no')->nullable();
            $table->string('mobile_no');
            $table->date('employment_start');
            $table->date('employment_end')->nullable();
            $table->string('job_title')->nullable();
            $table->enum('job_status', ['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation', 'contract', 'part-time']);
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
