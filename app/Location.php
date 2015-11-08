<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Location extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

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
