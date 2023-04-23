<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Define the table associated with the model
    protected $table = 'statuses';

    // Define the fillable attributes of the model
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'status',
        'tenant_status',
        'room_id',
    ];

    // Define any relationships or custom methods for the Status model

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


}
