<section class="px-[15px] lg:px-0" style="background-image:url({{asset('assets/images/home/footer_bg.png')}})">
    <div class="container border-b-[1px] border-white/20 py-5">
        <div class="block lg:flex items-center">
            <div class="flex-1">
                <a href="">
                    <img class="aspect-video" src="{{asset('assets/images/home/footer_logo.png')}}" alt="">
                </a>
                <div class="flex gap-1 mt-3">
                    <a href="">
                        <img src="{{asset('assets/images/icon/facebook.png')}}" alt="">
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/icon/youtube.png')}}" alt="">
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/icon/linkedin.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex-1">
                <div class="flex gap-7">
                    <h1 class="text-lg font-bold text-white">Hotline</h1>
                    <p class="text-lg text-white">0888729119</p>
                </div>
                <div class="flex gap-7">
                    <h1 class="text-lg font-bold text-white">Email</h1>
                    <p class="text-lg text-white">Info@Luci.Vn</p>
                </div>
                <div class="flex gap-7">
                    <h1 class="text-lg font-bold text-white">MST</h1>
                    <p class="text-lg text-white">839645234</p>
                </div>
            </div>
            <div class="flex-1 lg:pr-[40px]">
                <h1 class="text-lg font-bold text-white">Trụ sở Hà Nội</h1>
                <p class="text-lg text-white">Tầng 2, toà New Skyline, Đường Nguyễn Khuyễn, Phường Văn Quán, Quận Hà
                    Đông, Tp. Hà Nội</p>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Trụ sở Hồ chí minh</h1>
                <p class="text-lg text-white">P2, Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TP. Hồ chí minh</p>
            </div>
            <div class="flex-1">
                <a href="">
                    <img class="mx-auto aspect-video" src="{{asset('assets/images/home/certificate.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="container border-b-[1px] border-white/20 py-5">
        <div class="block lg:flex items-center">
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Hotline</h1>
                <div class="mt-3">
                    <p class="py-1 text-lg text-white"><a href="">Về chúng tôi</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Tuyển Dụng</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Liên hệ</a></p>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Giải pháp</h1>
                <div class="mt-3">
                    <p class="py-1 text-lg text-white"><a href="">Phần mềm quản lý đô thị thông minh</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Trung tâm điều hành thông minh</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Đèn đường thông minh</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Quản lý tài sản thông minh</a></p>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Dịch vụ</h1>
                <div class="mt-3">
                    <p class="py-1 text-lg text-white"><a href="">Hệ sinh thái LuciCloud</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Tư vấn giải pháp</a></p>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Sản phẩm</h1>
                <div class="mt-3">
                    <p class="py-1 text-lg text-white"><a href="">GateWay</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Bộ điều khiển NEMA</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Bộ điều khiển tụ điện</a></p>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Blog</h1>
                <div class="mt-3">
                    <p class="py-1 text-lg text-white"><a href="">Tư Vấn Đô Thị Thông Minh</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Tư Vấn Trung Tâm Điều Hành Thông Minh</a></p>
                    <p class="py-1 text-lg text-white"><a href="">Tin Tức</a></p>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-lg font-bold text-white">Chính sách</h1>
                <div class="mt-3">
                    @foreach($policies as $policy)
                    <p class="py-1 text-lg text-white"><a
                            href="{{route('home.policy.detail',$policy->id)}}">{{translate($policy,'name')}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="py-1 text-lg text-[12px] text-white text-center"><a href="">© 2022 LUCI. All Right Reserved.</a></p>
    </div>
</section>