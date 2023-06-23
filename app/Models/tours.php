<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'description',
        'price',
        'image',
        'start_date',
        'back_date',
    ];

    public function ticket()       
    {
        return $this->hasMany(ticket::class, "tour_id");
    }

}
