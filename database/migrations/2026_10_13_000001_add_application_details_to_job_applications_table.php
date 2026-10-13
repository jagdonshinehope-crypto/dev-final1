<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('job_applications', function (Blueprint $table): void {
            $table->string('first_name', 120)->nullable();
            $table->string('last_name', 120)->nullable();
            $table->string('email')->nullable();
            $table->string('phone', 40)->nullable();
            $table->string('location', 120)->nullable();
            $table->string('years_experience', 40)->nullable();
            $table->string('skills', 500)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table): void {
            $table->dropColumn([
                'first_name',
                'last_name',
                'email',
                'phone',
                'location',
                'years_experience',
                'skills',
            ]);
        });
    }
};
