<?php

namespace Modules\App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banner\Http\Repositories\BannerRepository;

class AppHomeController extends Controller
{   
    private $bannerRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->middleware('locale');
        $this->bannerRepository = $bannerRepository;
    }
    public function index()
    {
        $banners = $this->bannerRepository->all();
        return view('app::home.index',compact('banners'));
    }
}
