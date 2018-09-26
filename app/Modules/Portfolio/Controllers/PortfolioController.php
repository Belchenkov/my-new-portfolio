<?php

namespace App\Modules\Portfolio\Controllers;

use App\Mail\SendMe;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

    /**
     * @param Request $request
     * Отравляем мне на почту
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function sendMessage(Request $request)
    {
        $data = collect([
            'name' => $request->input('name', null),
            'email' => $request->input('email', null),
            'message' => $request->input('message', null)
        ]);

        Mail::send(new SendMe($data));
    }
}
