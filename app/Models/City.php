<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class City extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }
}
