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
        Schema::create('user_roles', function (Blueprint $table) {
            // $table->id();
            $table->integer('role_id_ref')->unsigned();
            $table->foreign('role_id_ref')->references('id')->on('roles');
            $table->bigInteger('user_id_ref')->unsigned();
            $table->foreign('user_id_ref')->references('id')->on('users');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
