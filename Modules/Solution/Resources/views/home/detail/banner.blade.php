<section class="bg-[#009B71]">
    <div class="">
        <x-component::breadcrumb.home-default>
            <a class="text-[15px] text-white">Về chúng tôi</a>
            <x-slot name="title">
                <h1 class="font-bold text-[18px] text-white mt-2">Về LUCI</h1>
            </x-slot>
        </x-component::breadcrumb.home-default>
        <div class="grid grid-cols-9 relative">
            <div class="absolute w-full h-20 bg-[#F6F9FB] bottom-0"></div>
            <div class="col-span-4 lg:pl-[133px] mt-[80px]">
                <h2 class="font-semibold text-[60px] uppercase text-white">
                    giải pháp
                    quản lý đô thị thông minh
                </h2>
                <p class="text-white text-[24px] leading-[32px] mt-[52px]">Hi Luci là giải pháp được ưa chuộng nhất
                    trong mô hình
                    triển khai Đô thị thông minh đến từ Luci. Hi
                    Luci xuất hiện mang đến cho tất cả những đơn vị quản lý tòa nhà, bất động sản hay căn hộ sự tiện
                    ích, đơn giản và tiết kiệm tối đa nguồn lực.
                </p>
                <a href="" class="bg-white inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[80px]">
                    <div class="flex items-center">
                        <span class="text-[24px] font-semibold text-home_primary">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/green_arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-span-5">
                <img class="ml-auto z-10 relative" src="{{asset('assets/images/solution/banner.png')}}" alt="">
            </div>
        </div>
    </div>
</section>