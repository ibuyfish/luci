<section class="py-8 ">
    <div class="lg:px-[133px] py-[87px]">
        <div class="flex items-center">
            <h1 class="uppercase font-bold text-home_primary text-[48px]">Blog</h1>
            <div class="ml-auto">
                <img class="aspect-square cursor-pointer" src="{{asset('assets/images/icon/arrow_circle_next.png')}}"
                    alt="">
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-x-8 gap-y-12">
            @for($i = 0 ; $i < 4 ; $i++) <div class="shadow-2xl rounded-2xl flex overflow-hidden">
                <img class="object-cover aspect-square" src="{{asset('assets/images/home/blog_ex.png')}}" alt="">
                <div class="flex flex-col">
                    <div class="px-[34px]">
                        <h1 class="font-bold text-[32px] text-black">Bạn đã thực sự hiểu khu đô thị thông minh là gì?
                        </h1>
                        <p class="text-base text-black pt-[26px]">
                            Khu đô thị thông minh là gì? Tại sao mô hình này lại trở thành xu hướng phát triển của thế
                            giới?
                            Dành cho những ai đang quan tâm tới vấn đề này
                        </p>
                    </div>
                    <div class="flex mt-auto items-center border-t-[1px] border-[#cccccc] pl-[15px] h-[72px]">
                        <img class="aspect-square" src="{{asset('assets/images/icon/blog_icon.png')}}" alt="">
                        <a class="text-base font-semibold text-black ml-[15px]" href="">Xem thêm</a>
                        <div class="w-[1px] bg-[#cccccc] h-full ml-auto"></div>
                        <div class="px-[30px]">
                            <img class="aspect-square" src="{{asset('assets/images/icon/green_arrow_right.png')}}"
                                alt="">
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

@pushonce('c-script')

@endpushonce