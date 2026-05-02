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
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Email");
            $table->string("Cell Number");

            $table->unsignedBigInteger('computers_id')->unique();

            $table->foreign('computers_id')
                ->references('id')
                ->on('computers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('courses_id')->unique();

            $table->foreign('courses_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices');
    }
};
