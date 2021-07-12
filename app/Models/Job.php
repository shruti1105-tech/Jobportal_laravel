<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'company_id', 'city_id', 'job_name', 'description', 'position', 'type'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
