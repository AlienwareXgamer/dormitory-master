<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'status',
        'aroom_id',
    ];

    public function aroom()
    {
        return $this->belongsTo(Aroom::class);
    }
}
