<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    //  protected $guarded = [];
    protected $fillable = [

        'first_name',
        'last_name',
        'biography',
        'favoraite',
        'province',
        'cities',
        'img',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
