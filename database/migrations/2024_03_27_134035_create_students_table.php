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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('lieudenaissance');
            $table->string('mobile');
            $table->string('matricule');
            $table->string('addresse');
            $table->text('photo_path')->nullable();
            $table->string('parent_name');
            $table->string('parent_phone_number');
            $table->string('second_phone_number')->nullable();
            $table->boolean('gender');
            $table->date('enrollment_date');
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
