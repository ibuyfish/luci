<section>
    <div class="container flex items-center justify-center gap-[100px] py-[50px]">
        <a href="">
            <img src="{{asset('assets/images/news.png')}}" alt="">
            <h1 class="text-base text-home_text mt-2">Tin Tuc</h1>
        </a>
        <a href="">
            <img src="{{asset('assets/images/speaker.png')}}" alt="">
            <h1 class="text-base text-home_text mt-2">Tin Tuc</h1>
        </a>
    </div>
</section>
<section class="" style=" background-image:url({{asset('assets/images/home/banner_ex.png')}})">
    <div class="swiper mySwiper bg-home_primary/70">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide grid grid-cols-1 lg:grid-cols-9 px-4 lg:px-0">
                <div class="col-span-4 lg:pl-[133px] mt-[80px]">
                    <div class="flex items-center mt-[24px]">
                        <p class="text-sm text-white">Chào mừng bạn đến với</p>
                        <img src="{{asset('assets/images/banner_arrow.png')}}" alt="">
                    </div>
                    <h1 class="text-[40px] lg:text-[80px] uppercase font-bold text-white">{{translate($banner,'name')}}
                    </h1>
                    <h2 class="font-semibold text-[24px] lg:text-[42px] text-white">
                        {{translate($banner,'subname')}}
                    </h2>
                    <ul class="list-disc list-inside">
                        <li class="text-white mt-1">Tiết kiệm nguồn lực quản lý</li>
                        <li class="text-white mt-1">Hệ thống vô cùng minh bạch và thuận tiện</li>
                        <li class="text-white mt-1">Đảm bảo sự chính xác tuyệt đối của số liệu</li>
                        <li class="text-white mt-1">Đẩy mạnh sự chuyên nghiệp và tức thì của từng bộ phận</li>
                        <li class="text-white mt-1">Nâng cao sự kết nối trực tuyến tức thời với cư dân</li>
                    </ul>
                </div>
                <div class="col-span-5">
                    <img class="ml-auto" src="{{env('APP_URL').$banner->thumbnail}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>