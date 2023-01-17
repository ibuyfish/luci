<section class="bg-[#009B71]">
    <div class="relative" style=" background-image:url({{asset('assets/images/home/ask_bg.png')}})">
        <x-component::breadcrumb.home-default>
            <a class="text-[15px] text-white">Liên hệ</a>
            <x-slot name="title">
                <h1 class="font-bold text-[18px] text-white mt-2">Liên hệ</h1>
            </x-slot>
        </x-component::breadcrumb.home-default>
        <div class="container grid grid-cols-1 lg:grid-cols-9 lg:gap-[90px] py-[104px] px-[15px] lg:px-0">
            <div class="col-span-4 z-10">
                <h1 class="leading-[120%] font-bold text-[32px] lg;text-[48px] text-white uppercase">
                    Hãy trò chuyện cùng chúng tôi
                </h1>
                <p class="text-base lg:text-[25px] leading-8 text-white mt-[30px]">
                    Chúng tôi mang đến cho bạn một giải pháp toàn diện đáp ứng các yêu cầu từ đơn giản đến phức tạp
                    nhất!
                </p>
            </div>
            <div class="absolute right-0 bottom-0">
                <img class="w-[50vw] lg:w-auto h-auto" src="{{asset('assets/images/contact/banner.png')}}" alt="">
            </div>
        </div>
    </div>
</section>