<?php

namespace App\Modules\Admin\Controllers;

use App\Repositories\CategoryRepository;
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
    public function cagetoriesPage()
    {
        $categories = CategoryRepository::instance()->getAllCategories();

        return view("Admin::categoriesPage", compact('categories'));
    }

    public function worksPage()
    {
        return view("Admin::worksPage");
    }
}
