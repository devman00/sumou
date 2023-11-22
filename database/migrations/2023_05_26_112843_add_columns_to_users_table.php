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
        Schema::table('users', function (Blueprint $table) {
            //
            // $table->string('phone')->after('password')->nullable();
            
            
            $table->string('phone')->unique()->after('password')->nullable();;
            $table->string('verification_code')->unique()->after('phone')->nullable();
            $table->timestamp('phone_verified_at')->after('verification_code')->nullable();
            $table->string('avatar')->after('phone')->nullable();
            $table->integer('status')->after('avatar')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
