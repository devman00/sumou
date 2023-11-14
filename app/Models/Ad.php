<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plate_type',
        'first_letter',
        'second_letter',
        'third_letter',
        'first_number',
        'second_number',
        'third_number',
        'fourth_number',
        'validity_of_periodic_examination',
        'validity_of_driving_form',
        'vehicle_insurance_status',
        'are_there_violations',
        'phone',
        'price',
        'in_auction',
        'views',
        'is_featured',
        'status',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
