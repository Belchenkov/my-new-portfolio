<?php

namespace App\Modules\Portfolio\Controllers;

use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = WorkRepository::instance()->getWorksPortfolio();

        return view("Portfolio::index", compact('works'));
    }
}
