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
        Schema::disableForeignKeyConstraints();
        Schema::create('subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('restrict')->onUpdate('restrict');

            $table->id();
            $table->string('libelle');
            $table->string('sylabus');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
