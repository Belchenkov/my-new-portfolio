<?php

namespace App\Modules\Admin\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\WorkRepository;
use App\Services\HelperService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Admin::index");
    }

    /**
     * Страница - Категории
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Aleksey Belchenkov <belchenkov.leha@mail.ru>
     */
    public function categoriesPage()
    {
        $categories = CategoryRepository::instance()->getAllCategories();

        return view("Admin::categoriesPage", compact('categories'));
    }

    /**
     * Получение работ
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function worksPage()
    {
        extract(WorkRepository::instance()->getWorksPageData());

        return view("Admin::worksPage", compact(
            'categories',
            'works'
        ));
    }

    public function saveWork(Request $request, HelperService $helperService)
    {
        // Загрузка изображения
        $pathImg = $helperService->downloadImg($request->file('img', null));

        // Сохраняем работу
        WorkRepository::instance()->saveWork(
            $pathImg,
            $request->input('title', null),
            $request->input('desc', null),
            $request->input('demoLink', null),
            $request->input('category', null),
            $request->input('repositoryLink', null),
            $request->input('isVisible', null)
        );
    }
}
