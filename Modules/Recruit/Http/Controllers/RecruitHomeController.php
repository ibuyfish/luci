<?php

namespace Modules\Recruit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Recruit\Entities\RecruitApplicant;
use Modules\Recruit\Http\Repositories\RecruitRepository;

class RecruitHomeController extends Controller
{
    private $recruitRepository;
    public function __construct(RecruitRepository $recruitRepository)
    {
        $this->recruitRepository = $recruitRepository;
    }
    public function detail(){
        $recruits = $this->recruitRepository->all();
        return view('recruit::home.index',compact('recruits'));
    }
    public function storeApplicant(Request $request){
        $model = new RecruitApplicant();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->position = $request->position;
        $model->save();
        return redirect()->back()->with('message','Gửi đơn thành công');
    }
}
