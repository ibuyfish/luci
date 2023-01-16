<section>
    <div class="bg-white lg:mx-[130px] rounded-xl p-4 lg:p-[39px] relative z-10">
        <div class="relative">
            <h1 class="font-bold text-black text-base lg:text-[20px] border-b-[1px] border-[#cccccc] py-5">
                Dịch vụ cung cấp
            </h1>
            <img class="toggleDropDown active cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_minus.png')}}" alt="">
            <div class="dropDownContainer">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1 py-8">
                    <div class="order-last lg:order-first">
                        <h1 class="text-base mt-3 lg:mt-0 lg:text-[24px] font-bold text-black">Hệ sinh thái Luci Cloud
                        </h1>
                        <p class="text-sm mt-2 lg:text-[20px] font-medium text-[#2E2E2E] 2xl:leading-8">
                            Luci đã tiếp cận hơn 50.000 cư dân thông minh và ghi danh tại hơn 5 đại lộthị trải dọc
                            Việt
                            Nam.Luci
                            mang đến kiến tạo hàng đầu với nhiều ý tưởng độc đáo , chú trọng nâng cao trải nghiệm
                            tiêu
                            dùng
                            và
                            phủ xanh mạng lưới công nghệ trên toàn quốc.Luci đã có mặt tại Hà Nội , TP Hồ Chí Minh ,
                            cùng
                            với
                            mạng lưới đối tác quốc tế tại Singapore , Nhật Bản , Hàn Quốc.....
                        </p>
                        <a href=""
                            class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                            <div class="flex items-center">
                                <span class="text-base lg:text-[24px] font-semibold text-white">
                                    Đọc thêm về chúng tôi
                                </span>
                                <img class="pl-2 object-cover aspect-video"
                                    src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="rounded-lg mx-auto object-cover aspect-video"
                            src="{{asset('assets/images/home/ask_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @for($i = 0 ; $i < 6 ; $i++) <div class="relative">
            <h1 class="font-bold text-black text-base lg:text-[20px] border-b-[1px] border-[#cccccc] py-5">
                Dịch vụ cung cấp
            </h1>
            <img class="toggleDropDown cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_plus.png')}}" alt="">
            <div class="dropDownContainer hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1 py-8">
                    <div class="order-last lg:order-first">
                        <h1 class="text-base mt-3 lg:mt-0 lg:text-[24px] font-bold text-black">Hệ sinh thái Luci Cloud
                        </h1>
                        <p class="text-sm mt-2 lg:text-[20px] font-medium text-[#2E2E2E] 2xl:leading-8">
                            Luci đã tiếp cận hơn 50.000 cư dân thông minh và ghi danh tại hơn 5 đại lộthị trải dọc
                            Việt
                            Nam.Luci
                            mang đến kiến tạo hàng đầu với nhiều ý tưởng độc đáo , chú trọng nâng cao trải nghiệm
                            tiêu
                            dùng
                            và
                            phủ xanh mạng lưới công nghệ trên toàn quốc.Luci đã có mặt tại Hà Nội , TP Hồ Chí Minh ,
                            cùng
                            với
                            mạng lưới đối tác quốc tế tại Singapore , Nhật Bản , Hàn Quốc.....
                        </p>
                        <a href=""
                            class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                            <div class="flex items-center">
                                <span class="text-base lg:text-[24px] font-semibold text-white">
                                    Đọc thêm về chúng tôi
                                </span>
                                <img class="pl-2 object-cover aspect-video"
                                    src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="rounded-lg mx-auto object-cover aspect-video"
                            src="{{asset('assets/images/home/ask_img.png')}}" alt="">
                    </div>
                </div>
            </div>
    </div>
    @endfor
    </div>
</section>

@pushonce('c-script')
<script>
    $('.toggleDropDown').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active').attr('src', `{{asset('assets/images/icon/green_plus.png')}}`);
        } else {
            $(this).addClass('active').attr('src', `{{asset('assets/images/icon/green_minus.png')}}`);
        }
        $(this).next().slideToggle('fast');
    });
</script>
@endpushonce