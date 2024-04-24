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
            $table->integer('personnel_id')->unique();
            $table->unsignedBigInteger('school_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('sex', ['male', 'female']);
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->date('employment_start');
            $table->date('employment_end')->nullable();
            $table->string('job_title');
            $table->enum('job_status', ['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation', 'contract', 'part-time']);
            $table->string('division');
            $table->string('district');
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools');
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
