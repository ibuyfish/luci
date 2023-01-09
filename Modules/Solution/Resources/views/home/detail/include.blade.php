<section>
    <div class="container py-[90px]">
        <h1 class="text-[40px] font-bold uppercase text-black text-center">Luzi bao gồm những gì?
        </h1>
        <p class="text-[20px] text-black text-center px-[20%] mt-6">
            Tổng thể giải pháp quản lý đô thị thông minh Luzi ra mắt và phát triển gồm 4 phân hệ, mỗi hệ thống là một
            sản phẩm ứng với từng nhu cầu sử dụng riêng biệt.
        </p>
        <div class="grid grid-cols-2 gap-[34px] mt-[50px]">
            @for($i = 0 ; $i < 4 ; $i++) <div
                class="bg-white border-home_primary rounded-xl shadow-lg flex gap-[22px] px-[37px] py-[19px]">
                <img class="w-[63px] h-[63px]" src="{{asset('assets/images/icon/solution1.png')}}" alt="">
                <div>
                    <h1 class="text-black font-semibold text-[20px]">Phần mềm cư dân</h1>
                    <p class="text-sm text-black mt-2">Tất cả cư dân sống trong khu đô thị đều có quyền truy cập app cư
                        dân -
                        Hi Luci để đăng ký tiện
                        ích, đăng ký dịch vụ, thanh toán online các phí dịch vụ, theo dõi tra cứu lịch sử thanh toán,
                        phản ánh hoặc trao đổi trực tiếp với ban quản lý.
                    </p>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>