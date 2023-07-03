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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('identification_number', 30)->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('optional_phone');
            $table->date('date_of_birth');
            $table->text('family_composition');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('occupation');
            $table->string('work_area');
            $table->string('HdV');
            $table->string('EPS');
            $table->string('AFP');
            $table->string('ARL');
            $table->string('CCF');
            $table->string('emergency_contact');
            $table->string('emergency_phone');
            $table->string('socioeconomic_stratum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
