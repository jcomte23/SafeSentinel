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
            $table->foreignId('types_of_document_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string('identification_number', 30)->unique();
            $table->string('email')->unique();
            $table->foreignId('international_phone_code_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string('phone');
            $table->integer('optional_international_phone_code_id')->nullable();
            $table->string('optional_phone')->nullable();
            $table->foreignId('types_of_genre_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreignId('blood_type_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->date('date_of_birth');
            $table->foreignId('civil_status_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->text('family_composition');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('occupation');
            $table->string('work_area');
            $table->foreignId('school_grade_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreignId('salary_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreignId('work_schedule_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string('HdV');
            $table->string('current_contract');
            $table->string('EPS');
            $table->string('AFP');
            $table->string('ARL');
            $table->string('CCF');
            $table->string('emergency_contact');
            $table->integer('emergency_international_phone_code_id');
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
