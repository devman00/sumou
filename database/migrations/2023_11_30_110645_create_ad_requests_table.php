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
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->enum('request_type', ['sell', 'confirm'])->default('sell');

           
            // Seller Plate Information ------ 
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

            // $table->string('phone');        // vendor/seller
            // $table->string('national_id');  // vendor/seller
            $table->string('plate_price');

            
            // Bank Info --- 
            $table->string('bank_name');  // vendor/seller
            $table->string('bank_iban');  // vendor/seller => 11 numbers

            // Address
            $table->string('city');  // vendor/seller
            $table->string('address');  // vendor/seller

            // رقم الوكالة
            $table->string('authorization_number'); // 9 numbers
            
            /* --------------------------
                Vendor  
             ---------------------------*/
            $table->string('vendor_phone')->nullable();      
            $table->string('vendor_national_id')->nullable(); 
            
            // Bank Info --- 
            $table->string('vendor_bank_name')->nullable();  // vendor/seller
            $table->string('vendor_bank_iban')->nullable();  // vendor/seller => 11 numbers

            // Address
            $table->string('vendor_city')->nullable();  // vendor/seller
            $table->string('vendor_address')->nullable();  // vendor/seller

            // Authorization_number | رقم الوكالة 
            $table->string('vendor_authorization_number')->nullable();  // 9 numbers
            
            $table->string('vendor_plate_number')->nullable();    // vendor/seller  |  or only vendor  ex. ح م ر 2224 

            $table->string('vendor_serial_number')->nullable();  // vendor

            $table->integer('vendor_id')->nullable();
            $table->timestamp('status_updated_at')->nullable();

            // $table->string('status')->default('pending');  
            $table->enum('status', ['pending', 'accepted', 'rejected', 'paid', 'completed', 'canceled'])->default('pending');  // pending => (accepted | rejected) => paid => completd | canceled
            
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
