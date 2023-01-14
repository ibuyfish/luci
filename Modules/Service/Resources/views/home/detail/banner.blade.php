<section class="bg-cover" style="background-image:url({{asset('assets/images/service/bg.png')}})">
    <div class="pb-[168px]">
        <x-component::breadcrumb.home-default>
            <a class="text-[15px] text-white">Về chúng tôi</a>
            <x-slot name="title">
                <h1 class="font-bold text-[18px] text-white mt-2">Về LUCI</h1>
            </x-slot>
        </x-component::breadcrumb.home-default>
        <div class="relative px-6 lg:px-0">
            <div class="col-span-4 lg:pl-[133px] mt-[57px]">
                <img class="w-[100px] aspect-square mx-auto lg:mx-0"
                    src="{{asset('assets/images/service/service_icon.png')}}" alt="">
                <h2
                    class="font-semibold text-center text-[32px] lg:text-start lg:text-[50px] uppercase text-white mt-[22px]">
                    LUCI CLOUD
                </h2>
                <p class="text-white text-sm lg:text-[24px] leading-[32px] mt-[30px] lg:w-1/3">
                    Luci Cloud là hệ thống nền tảng điện toán đám mây hoàn toàn mới, cho phép các nhà quản trị dự án
                    theo dõi và lưu trữ hệ thống IoT trọn vẹn.
                </p>
                <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[30px]">
                    <div class="flex items-center">
                        <span class="text-sm lg:text-[24px] font-semibold text-white">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>