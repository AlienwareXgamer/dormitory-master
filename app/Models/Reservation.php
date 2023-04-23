<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'status',
        'roomed_id',
    ];

    public function reservation()
    {
        return $this->belongsTo(reservation::class);
    }

    public function roomeds()
    {
        return $this->belongsTo(roomeds::class);
    }
}
