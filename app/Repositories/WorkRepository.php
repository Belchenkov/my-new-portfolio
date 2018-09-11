<?php

namespace App\Repositories;

use App\Modules\Models\Work;

/**
 * Class WorkRepository
 * Работы
 *
 * @package App\Repositories
 * @author  Aleksey Belchenkov <belchenkov.leha@mail.ru>
 */
class WorkRepository extends AbstractRepository
{
    protected static $instance = null;

    /**
     * Получение работ
     * @return array
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function getWorks()
    {
        return [
            'categories' => CategoryRepository::instance()->getAllCategories()
        ];
    }

    /**
     * @param $pathImg
     * @param $title
     * @param $desc
     * @param $demoLink
     * @param $category
     * @param $repositoryLink
     * @param $isVisible
     * Сохранение работы
     * @return Work
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function saveWork($pathImg, $title, $desc, $demoLink, $category, $repositoryLink, $isVisible): Work
    {
        return Work::create([
            'title' => $title,
            'desc' => $desc,
            'preview_link' => $demoLink,
            'category_id' => $category,
            'github_link' => $repositoryLink,
            'is_visible' => $isVisible,
            'img' => $pathImg,
        ]);
    }
}