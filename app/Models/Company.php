<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name', 'city_id', 'phone_no', 'website', 'description'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
