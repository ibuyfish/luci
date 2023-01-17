<section class="bg-[#DCF0E2]">
    <div class="" style="background-image:url({{asset('assets/images/home/ask_bg.png')}})">
        <section class="bg-[#DCF0E2]">
            <div class="bg-white/40">
                <div class="container py-4">
                    <div class="flex">
                        <a class="text-[15px] text-home_primary" href="{{route('home')}}">Trang chủ</a>
                        <p class="text-home_primary mx-2">/</p>
                        <a class="text-[15px] text-home_primary">Tuyển dụng</a>
                    </div>
                    <div>
                        <h1 class="font-bold text-[18px] text-home_primary mt-2">Tuyển dụng</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="2xl:ml-[180px] grid grid-cols-1 lg:grid-cols-11 lg:gap-5 py-[55px] px-[15px] lg:px-0 mt-5 lg:mt-0">
            <div class="col-span-5 order-2 lg:order-1">
                <h1 class="font-bold text-[60px] text-home_primary uppercase">Cơ hội việc làm</h1>
                <p class="text-[24px] text-[#4A4A4A] mt-[19px]">
                    Ứng viên quan tâm tới các công việc tại Luci có thể gửi mẫu nhận thông báo ưu tiên hoặc sơ yếu lý
                    lịch tự thuật (CV) bao gồm các thông tin cá nhân, quá trình học tập, kinh nghiệm, mục tiêu, sở thích
                    cá nhân... thông qua trang thông tin bên cạnh. Ứng viên phù hợp sẽ được bộ phận tuyển dụng liên hệ
                    lại trong thời gian sớm nhất.

                </p>
                <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                    <div class="flex items-center">
                        <span class="text-[24px] font-semibold text-white">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/green_arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-span-3 bg-white rounded-3xl overflow-hidden mt-5 lg:mt-0 order-1 lg:order-2">
                <h1 class="text-[24px] text-white uppercase font-semibold text-center py-[22px] bg-home_primary">Nhận
                    thông báo tuyển
                    dụng</h1>
                <div class="px-[27px] pb-4">
                    <form action="{{route('home.recruit.storeApplicant')}}" method="POST">
                        @csrf
                        @if(session()->has('message'))
                        <h1 class="text-sm text-home_primary mt-3">{{session()->get('message')}}</h1>
                        @endif
                        <div class="mt-4">
                            <h1 class="text-base text-black font-medium">Họ tên</h1>
                            <input
                                class="w-full rounded-lg focus-visible:outline-none border-[1px] mt-1 border-[#E0E0E0] p-[13px]"
                                type="text" placeholder="Nhập thông tin tại đây" name="name">
                        </div>
                        <div class="mt-4">
                            <h1 class="text-base text-black font-medium">Email</h1>
                            <input
                                class="w-full rounded-lg focus-visible:outline-none border-[1px] mt-1 border-[#E0E0E0] p-[13px]"
                                type="text" name="email" placeholder="Nhập thông tin tại đây">
                        </div>
                        <div class="mt-4">
                            <h1 class="text-base text-black font-medium">Số điện thoại</h1>
                            <input
                                class="w-full rounded-lg focus-visible:outline-none border-[1px] mt-1 border-[#E0E0E0] p-[13px]"
                                type="text" placeholder="Nhập thông tin tại đây" name="phone">
                        </div>
                        <div class="mt-4">
                            <h1 class="text-base text-black font-medium">Vị trí ứng tuyển</h1>
                            <input
                                class="w-full rounded-lg focus-visible:outline-none border-[1px] mt-1 border-[#E0E0E0] p-[13px]"
                                type="text" placeholder="Nhập thông tin tại đây" name="position">
                        </div>
                        <p class="text-[13px] text-black mt-4">
                            Luci cam kết bảo mật mọi thông tin của ứng viên. Đồng thời, ứng viên cần chịu trách nhiệm về
                            độ
                            tin cậy thông tin cung cấp cho nhà tuyển dụng.
                        </p>
                        <button
                            class="text-center w-full bg-home_primary text-base text-white font-medium py-[14px] rounded-xl mt-4">Gửi
                            đi</button>
                    </form>
                </div>
            </div>
            <div class="col-span-3 order-3 lg:order-3 mt-5 lg:mt-0">
                <img class="aspect-square mx-auto" src="{{asset('assets/images/recruit/banner1.png')}}" alt="">
            </div>
        </div>
    </div>
</section>