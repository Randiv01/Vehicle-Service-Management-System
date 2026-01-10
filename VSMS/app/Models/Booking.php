<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'vehicle_make',
        'vehicle_model',
        'service_type',
        'service_date',
        'service_time',
        'additional_notes',
        'status',
    ];

    protected $casts = [
        'service_date' => 'date',
        'service_time' => 'datetime:H:i',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
