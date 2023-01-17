<section class="bg-[#009B71]">
    <div class="" style=" background-image:url({{asset('assets/images/home/ask_bg.png')}})">
        <x-component::breadcrumb.home-default>
            <a class="text-[15px] text-white">Về chúng tôi</a>
            <x-slot name="title">
                <h1 class="font-bold text-[18px] text-white mt-2">Về LUCI</h1>
            </x-slot>
        </x-component::breadcrumb.home-default>
        <div class="container grid grid-cols-9 gap-[90px]">
            <div class="col-span-4 -mt-[40px]">
                <img class="aspect-square" src="{{asset('assets/images/about/banner.png')}}" alt="">
            </div>
            <div class="col-span-5">
                <h1 class="leading-[120%] font-bold text-[100px] text-white uppercase">Giải pháp <br>
                    đô thị <br>
                    thông minh</h1>
                <a href="" class="bg-white inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                    <div class="flex items-center">
                        <span class="text-[24px] font-semibold text-home_primary">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/green_arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>