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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            
            // $table->enum('plate_type', ['private', 'transport']);
            $table->string('plate_type')->default('private');
            $table->string('first_letter');
            $table->string('second_letter');
            $table->string('third_letter');
            $table->string('first_number');
            $table->string('second_number');
            $table->string('third_number');
            $table->string('fourth_number');
            $table->string('validity_of_periodic_examination');
            $table->string('validity_of_driving_form');
            $table->string('vehicle_insurance_status');
            $table->string('are_there_violations');

            $table->string('phone');
            $table->string('price');
            $table->string('in_auction')->default('لا');
           
            $table->integer('views')->default(0);
            $table->string('is_featured')->default('no');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
