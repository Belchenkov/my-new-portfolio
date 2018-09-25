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
    public function getWorksPageData()
    {
        return [
            'categories' => CategoryRepository::instance()->getAllCategories(),
            'works' => $this->getWorks()
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

    /**
     * Получения списка всех работ в портфолио
     * @return Work[]|\Illuminate\Database\Eloquent\Collection
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function getWorks()
    {
        return Work::all();
    }
}