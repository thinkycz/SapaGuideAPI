<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class);
    }
}
