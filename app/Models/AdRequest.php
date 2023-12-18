<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',  // seller Id
        'request_type',
        'plate_type',
        'first_letter',
        'second_letter',
        'third_letter',
        'first_number',
        'second_number',
        'third_number',
        'fourth_number',
        'plate_price',
        'bank_name',
        'bank_iban',
        'city',
        'address',
        'authorization_number',
        'vendor_id',
        'vendor_phone',
        'vendor_national_id',
        'vendor_bank_name',
        'vendor_bank_iban',
        'vendor_city',
        'vendor_address',
        'vendor_authorization_number',
        'vendor_plate_number',
        'vendor_serial_number',
        'status',
    ];

    protected $casts = [
        'status_updated_at' => 'datetime',        
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
        // return $this->belongsTo(User::class);
    }

//     public function vendor() {
//         return $this->belongsTo(User::class,'id','vendor_id');
//         // return $this->belongsTo(User::class);
//     }
}
