<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class tickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_id',
        'place_start',
        'user_id'
    ];

    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function tours(){
        return $this->hasOne('App\Models\tours','id','tour_id');
    }

    public function users()       
    {
        return $this->belongsTo(users::class, "user_id");
    }
}
