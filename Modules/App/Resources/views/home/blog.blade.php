<section class="py-8 ">
    <div class="lg:px-[133px] lg:py-[87px] py-10 px-4">
        <div class="flex items-center">
            <h1 class="uppercase font-bold text-home_primary text-[32px] lg:text-[48px]">Blog</h1>
            <div class="ml-auto">
                <img class="aspect-square cursor-pointer w-[50px] lg:w-auto"
                    src="{{asset('assets/images/icon/arrow_circle_next.png')}}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-12">
            @for($i = 0 ; $i < 4 ; $i++) <div class="shadow-2xl rounded-2xl flex overflow-hidden">
                <div class="w-1/3">
                    <img class="object-cover aspect-square h-full" src="{{asset('assets/images/home/blog_ex.png')}}"
                        alt="">
                </div>
                <div class="flex flex-col flex-1">
                    <div class="px-2 lg:px-[34px]">
                        <h1
                            class="font-bold text-base lg:text-[26px] lg:leading-8 2xl:leading-10 2xl:text-[32px] text-black">
                            Bạn đã
                            thực sự hiểu
                            khu đô thị thông
                            minh là gì?
                        </h1>
                        <p class="hidden lg:block text-sm lg:text-base text-black pt-2 lg:pt-[26px]">
                            Khu đô thị thông minh là gì? Tại sao mô hình này lại trở thành xu hướng phát triển của thế
                            giới?
                            Dành cho những ai đang quan tâm tới vấn đề này
                        </p>
                    </div>
                    <div class="flex mt-auto items-center border-t-[1px] border-[#cccccc] pl-[15px] h-[72px]">
                        <img class="aspect-square" src="{{asset('assets/images/icon/blog_icon.png')}}" alt="">
                        <a class="text-base font-semibold text-black ml-[15px]" href="">Xem thêm</a>
                        <div class="px-2 lg:px-[30px] ml-auto">
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