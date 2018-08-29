<?php

namespace App\Repositories;

use App\Modules\Models\Category;

/**
 * Class CategoryRepository
 * Категории
 *
 * @package App\Repositories
 * @author  Aleksey Belchenkov <belchenkov.leha@mail.ru>
 */
class CategoryRepository extends AbstractRepository
{
    protected $PARENT_ID = 0;

    public function getAllCategories()
    {
        return Category::where('parent_id', $this->PARENT_ID)->with('getChildCategory')->get();
    }
}