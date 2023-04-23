<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantStatus extends Model
{
    use HasFactory;

    protected $fillable = ['status'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
