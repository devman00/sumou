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
        Schema::create('ad_requests', function (Blueprint $table) {
            $table->id();
            
            // User ---- 
            $table->string('user_type');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            
            // Plate Information ------ 
            $table->string('plate_type')->default('private');
            $table->string('first_letter');
            $table->string('second_letter');
            $table->string('third_letter');
            $table->string('first_number');
            $table->string('second_number')->nullable();
            $table->string('third_number')->nullable();
            $table->string('fourth_number')->nullable();
            // $table->string('validity_of_periodic_examination');
            // $table->string('validity_of_driving_form');
            // $table->string('vehicle_insurance_status');
            // $table->string('are_there_violations');

            $table->string('phone');        // vendor/seller
            $table->string('national_id');  // vendor/seller
            $table->string('plate_price');

            $table->string('plate_number');    // vendor/seller  ex. ح م ر 2224


            $table->string('serial_number');
            
            // Bank Info --- 
            $table->string('bank_name');
            $table->string('bank_iban');  // 11 numbers

            // Address
            $table->string('city');
            $table->string('address');

            
            $table->string('authorization_number'); // 9 numbers
            
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_requests');
    }
};
