<section class="mt-8" style="background-image:url({{asset('assets/images/home/ask_bg.png')}})">
    <div class="lg:px-[133px] px-4">
        <div class="grid lg:grid-cols-7 relative">
            <div class="lg:col-span-3"></div>
            <div class="block lg:absolute top-[40px] 2xl:top-[130px] xl:w-2/3 2xl:w-1/2">
                <h1 class="text-[32px] text-center lg:text-start lg:text-[50px] font-bold text-home_primary">Trải qua
                    hơn 5 năm thành lập </h1>
                <p class="text-black text-[16px] lg:text-[24px]">Công ty Cổ phần Luci là Công ty công nghệ tiên phong
                    nghiên cứu và
                    phát
                    Luci đã tiếp cận hơn 50.000 cư dân thông minh và ghi danh tại hơn 5 đại lộ thị trải dọc Việt
                    Nam.Luci
                    mang
                    đến kiến tạo hàng đầu với nhiều ý tưởng độc đáo , chú trọng nâng cao trải nghiệm tiêu dùng và phủ
                    xanh
                    mạng
                    lưới công nghệ trên toàn quốc.Luci đã có mặt tại Hà Nội , TP Hồ Chí Minh , cùng với mạng lưới đối
                    tác
                    quốc
                    tế tại Singapore , Nhật Bản , Hàn Quốc.....
                </p>
                <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                    <div class="flex items-center">
                        <span class="text-base lg:text-[24px] font-semibold text-white">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="lg:col-span-4 lg:-mt-[80px]">
                <img src="{{asset('assets/images/home/ask_people.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bg-white lg:mx-[130px] rounded-xl p-4 lg:p-[39px] xl:-mt-[250px] 2xl:-mt-[330px] relative z-10">
        <div class="relative">
            <h1 class="font-bold text-black text-base lg:text-[20px] border-b-[1px] border-[#cccccc] py-5">
                Dịch vụ cung cấp
            </h1>
            <img class="toggleDropDown active cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_minus.png')}}" alt="">
            <div class="dropDownContainer">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1 py-8">
                    <div class="order-last lg:order-first">
                        <h1 class="text-base mt-3 lg:mt-0 lg:text-[24px] font-bold text-black">Hệ sinh thái
                            Luci Cloud
                        </h1>
                        <p class="text-sm mt-2 lg:text-[20px] font-medium text-[#2E2E2E] xl:leading-8 2xl:leading-8">
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
                        <p class="text-sm mt-2 lg:text-[20px] font-medium text-[#2E2E2E] xl:leading-8 2xl:leading-8">
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