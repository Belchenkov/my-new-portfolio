<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    // Дочерние категории
    public function getChildCategory()
    {
        return $this->hasMany('App\Modules\Models\Category', 'parent_id');
    }
}
