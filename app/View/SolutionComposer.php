<?php

namespace App\View;

use Illuminate\View\View;
use Modules\Solution\Http\Repositories\SolutionRepository;

class SolutionComposer
{
    private $solutionRepository;
    public function __construct(SolutionRepository $solutionRepository)
    {
        $this->solutionRepository = $solutionRepository;
    }
    public function compose(View $view)
    {
        $view->with('solutions', $this->solutionRepository->getActive());
    }
}
