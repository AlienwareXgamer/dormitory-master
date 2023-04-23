<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogStatus extends Model
{
    protected $fillable = [
        'status', // replace with your desired attributes
        'description',
    ];

    // Define any relationships, if needed
    // For example, if LogStatus has a relationship with another model like Log, you can define it here
    // public function logs()
    // {
    //     return $this->hasMany(Log::class);
    // }
}
