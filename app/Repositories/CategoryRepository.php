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
    public function getAllCategories()
    {
        return Category::all();
    }
}