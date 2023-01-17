<section>
    <div class="container">
        <h1 class="text-[50px] uppercase text-black font-bold">Tìm hiểu các cơ hội việc làm</h1>
        <p class="text-[20px] font-medium mt-[27px] text-black">Đến với Luci, chúng ta cùng nhau kiến tạo một tương lai
            công nghệ
            mới! </p>
    </div>
</section>

<section class="mt-[48px]">
    <div class="bg-white mx-[130px] rounded-xl p-[39px] relative z-10">
        <div class="relative">
            <h1 class="font-bold text-black text-[20px] border-b-[1px] border-[#cccccc] py-5">
                Junior Tester
            </h1>
            <img class="toggleDropDown active cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_minus.png')}}" alt="">
            <div class="dropDownContainer">
                <div class="grid grid-cols-2 gap-1 py-8">
                    <div class="">
                        <h1 class="text-[24px]">
                            <span class="font-medium text-black">
                                Fulltime - Ha Noi -
                            </span>
                            <span class="text-home_primary">
                                Thời gian tuyển dụng còn 15
                                ngày
                            </span>
                        </h1>
                        <p class="text-[20px] font-medium text-[#2E2E2E] mt-3">
                            Đọc và phân tích tài liệu đặc tả yêu cầu nghiệp vụ phần mềm của dự án.. Lập test plan, viết
                            test case, chuẩn bị dữ liệu. Thiết lập môi trường kiểm thử, thực thi và báo cáo kết quả.
                            Thực hiện kiểm thử, phát hiện lỗi và phối hợp với các developer để sửa lỗi. eLog bugs, đánh
                            giá mức độ quan trọng và mức độ khẩn cấp của bug.
                            Báo cáo kết quả và đánh giá chất lượng sản phẩm.
                        </p>
                        <a href=""
                            class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                            <div class="flex items-center">
                                <span class="text-[24px] font-semibold text-white">
                                    Đọc thêm về chúng tôi
                                </span>
                                <img class="pl-2 object-cover aspect-video"
                                    src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="rounded-lg mx-auto object-cover aspect-video"
                            src="{{asset('assets/images/about/job.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @for($i = 0 ; $i < 6 ; $i++) <div class="relative">
            <h1 class="font-bold text-black text-[20px] border-b-[1px] border-[#cccccc] py-5">
                Junior Tester
            </h1>
            <img class="toggleDropDown cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_plus.png')}}" alt="">
            <div class="dropDownContainer hidden">
                <div class="grid grid-cols-2 gap-1 py-8">
                    <div class="">
                        <h1 class="text-[24px]">
                            <span class="font-medium text-black">
                                Fulltime - Ha Noi -
                            </span>
                            <span class="text-home_primary">
                                Thời gian tuyển dụng còn 15
                                ngày
                            </span>
                        </h1>
                        <p class="text-[20px] font-medium text-[#2E2E2E] mt-3">
                            Đọc và phân tích tài liệu đặc tả yêu cầu nghiệp vụ phần mềm của dự án.. Lập test plan, viết
                            test case, chuẩn bị dữ liệu. Thiết lập môi trường kiểm thử, thực thi và báo cáo kết quả.
                            Thực hiện kiểm thử, phát hiện lỗi và phối hợp với các developer để sửa lỗi. eLog bugs, đánh
                            giá mức độ quan trọng và mức độ khẩn cấp của bug.
                            Báo cáo kết quả và đánh giá chất lượng sản phẩm.
                        </p>
                        <a href=""
                            class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                            <div class="flex items-center">
                                <span class="text-[24px] font-semibold text-white">
                                    Đọc thêm về chúng tôi
                                </span>
                                <img class="pl-2 object-cover aspect-video"
                                    src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="rounded-lg mx-auto object-cover aspect-video"
                            src="{{asset('assets/images/about/job.png')}}" alt="">
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