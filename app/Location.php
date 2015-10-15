<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'title',
        'location',
        'latitude',
        'longitude',
        'email',
        'phone',
        'website',
        'description',
        'working_hours',
        'logo_id',
        'category_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function catagory()
    {
        return $this->belongsTo('App\Category');
    }

    public function logo()
    {
        return $this->belongsTo('App\Image', 'logo_id');
    }
}
