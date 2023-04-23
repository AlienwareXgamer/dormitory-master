<?php

namespace App\Models;

use App\Models\Archive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aroom extends Model
{
    use HasFactory;
    public function archive()
    {
        return $this->hasOne(Archive::class);
    }


}
