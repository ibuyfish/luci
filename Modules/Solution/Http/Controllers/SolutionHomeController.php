<?php

namespace Modules\Solution\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Solution\Http\Repositories\SolutionRepository;

class SolutionHomeController extends Controller{
    private $solutionRepository;
    public function __construct(SolutionRepository $solutionRepository)
    {
        $this->middleware('locale');
        $this->solutionRepository = $solutionRepository;
    }
    public function detail($id){
        $model = $this->solutionRepository->findById($id);
        return view('solution::home.detail.index',compact('model'));
    }
}