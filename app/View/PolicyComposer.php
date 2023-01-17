<?php

namespace App\View;

use Illuminate\View\View;
use Modules\Policy\Http\Repositories\PolicyRepository;

class PolicyComposer
{
    private $policyRepository;
    public function __construct(PolicyRepository $policyRepository)
    {
        $this->policyRepository = $policyRepository;
    }
    public function compose(View $view)
    {
        $view->with('policies', $this->policyRepository->all());
    }
}
