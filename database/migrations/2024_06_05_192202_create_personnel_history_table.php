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
        Schema::create('personnel_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personnel_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('position_id');
            $table->string('employee_id');
            $table->enum('appointment', ['regular', 'part-time', 'temporary', 'contract']);
            $table->string('fund_source');
            $table->enum('salary_grade', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20']);
            $table->enum('step', ['1', '2', '3', '4', '5', '6', '7', '8'])->nullable();
            $table->enum('category', ['SDO Personnel','School Head', 'Elementary School Teacher', 'Junior High School Teacher', 'Senior High School Teacher', 'School Non-teaching Personnel']);
            $table->enum('job_status', ['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation']);
            $table->date('employment_start');
            $table->date('employment_end')->nullable();
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('position')->onDelete('cascade');
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_history');
    }
};
