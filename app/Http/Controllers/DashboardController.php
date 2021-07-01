<?php

namespace App\Http\Controllers;

use App\Services\GeneralService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private GeneralService $generalService;
    public function __construct(GeneralService $generalService)
    {
        $this->generalService = $generalService;
    }

    function index(){
        $data = $this->generalService->display_statistics();

        return view('dashboard', ['data' => $data]);
    }
}
