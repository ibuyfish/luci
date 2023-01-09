<section class="py-[112px]">
    <div class="container">
        <h1 class="text-[40px] font-bold uppercase text-black text-center">Nền tảng quản lý tích hợp nhiều tính năng
        </h1>
        <p class="text-[20px] text-black text-center px-[20%] mt-6">
            Hi Luci ra đời nhằm nâng cao chất lượng cũng như tiện ích trong quá trình quản lý bất động sản, tòa nhà,
            chung cư của ban quản lý, chủ đầu tư.
        </p>
        <div class="grid grid-cols-4 gap-[32px] mt-[69px]">
            @for($i = 0 ; $i < 4 ; $i++) <div
                class="px-[14px] py-[19px] bg-home_primary overflow-hidden rounded-xl relative">
                <img class="absolute bottom-2 right-2 w-[150px] h-[188px] opacity-10"
                    src="{{asset('assets/images/icon/join_icon.png')}}" alt="">
                <img class="object-cover aspect-video rounded-lg" src="{{asset('assets/images/solution/feature1.png')}}"
                    alt="">
                <div class="flex bg-white mt-5 rounded-lg items-center px-2 py-1">
                    <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
                    <h1 class="text-black text-[20px] font-semibold uppercase text-center flex-1">Quản lý cư dân - khách
                        hàng</h1>
                    <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
                </div>
                <ul class="list-disc list-outside ml-4 text-base font-medium my-5 text-white">
                    <li>Quản lý thông tin chi tiết từng mặt bằng</li>
                    <li> Quản lý trạng thái của mặt bằng</li>
                    <li>Quản lý việc chuyển quyền sử dụng hoặc cho thuê mặt bằng trong toà nhà</li>
                    <li>Quản lý tình trạng, lịch sử sử dụng mặt bằng toà nhà</li>
                </ul>
        </div>
        @endfor
    </div>
    </div>
</section>