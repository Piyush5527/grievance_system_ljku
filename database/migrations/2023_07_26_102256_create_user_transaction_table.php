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
        Schema::create('user_transaction', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('enrollment_ref_id')->unsigned()->nullable();
            $table->foreign('enrollment_ref_id')->references('enrollment_no')->on('student_masters');
            $table->bigInteger('faculty_ref_id')->unsigned()->nullable();
            $table->foreign('faculty_ref_id')->references('faculty_id')->on('faculty_masters');
            $table->string('email')->unique();
            $table->enum('type',['Student','Faculty']);
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_transaction');
    }
};
