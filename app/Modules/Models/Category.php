<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected const ACTIVE = 1;

    // Дочерние категории
    public function getChildCategory()
    {
        return $this->hasMany('App\Modules\Models\Category', 'parent_id')
            ->where('active', self::ACTIVE);
    }

    // Работы привязанные к категории
    public function works()
    {
        return $this->hasMany('App\Modules\Models\Work', 'category_id');
    }
}
