<section>
    <div class="container grid grid-cols-9 pb-[70px] gap-[60px]">
        <div class="col-span-4 mt-[55px]">
            <div class="flex gap-5">
                <a href="" class=block>
                    <img class="w-[85px]" src="{{asset('assets/images/icon/call.png')}}" alt="">
                    <div class="w-2/3">
                        <p class="text-sm text-black">Bạn có thể nói chuyện với cố vấn của chúng tôi bằng cách gọi số
                            điện thoại
                            cho quốc gia hoặc
                            khu vực của bạn.</p>
                        <a href=""
                            class="bg-home_primary uppercase mt-3 text-[20px] block text-center rounded-xl py-2 text-white font-medium">0888
                            729
                            119</a>
                    </div>
                </a>
            </div>
            <div class="flex gap-5 mt-[66px]">
                <a href="" class=block>
                    <img class="w-[85px]" src="{{asset('assets/images/icon/chat.png')}}" alt="">
                    <div class="w-2/3">
                        <p class="text-sm text-black">Bạn có thể nói chuyện với cố vấn của chúng tôi bằng cách gọi số
                            điện thoại
                            cho quốc gia hoặc
                            khu vực của bạn.</p>
                        <a href=""
                            class="bg-[#F79428] uppercase mt-3 text-[20px] block text-center rounded-xl py-2 text-white font-medium">
                            Tham gia fanpage</a>
                    </div>
                </a>
            </div>
            <h1 class="text-[24px] text-black font-semibold mt-[66px]">Trụ sở làm việc</h1>
            <div class="bg-[#009B71]/10 py-6 px-[50px] rounded-xl border-home_primary border-[1px] mt-[30px]">
                <h1 class="text-[24px] text-[#009B71]">
                    <strong>Trụ sở Hà Nội:</strong>
                    Tầng 2, toà New Skyline, Đường Nguyễn Khuyễn, Phường Văn Quán, Quận Hà Đông, Tp. Hà
                    Nội
                </h1>
            </div>
            <div class="bg-white py-6 px-[50px] rounded-xl border-black border-[1px] mt-[30px]">
                <h1 class="text-[24px] text-[#009B71]">
                    <strong>Trụ sở Hà Nội:</strong>
                    Tầng 2, toà New Skyline, Đường Nguyễn Khuyễn, Phường Văn Quán, Quận Hà Đông, Tp. Hà
                    Nội
                </h1>
            </div>
        </div>
        <div class="col-span-5 shadow-2xl rounded-xl overflow-hidden -mt-[150px] z-10 relative">
            <div class="flex items-center gap-5 py-[31px] px-[64px] bg-[#E9FFF9]">
                <img src="{{asset('assets/images/contact/mail.png')}}" alt="">
                <p class="text-[24px] text-black">Vui lòng để lại thông tin và lời bạn muốn nhắn nhủ, chúng tôi sẽ liên
                    hệ lại
                    trong 24h!</p>
            </div>
            <div class="bg-white px-[64px] pt-[30px] h-full">
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-x-3 gap-y-6">
                        <div>
                            <h1 class="text-base text-black font-medium">Họ<span class="text-red-600">*</span></h1>
                            <input type="text" placeholder="Nhập thông tin tại đây" name="last_name"
                                class="mt-[9px] w-full border-[1px] border-[#E0E0E0] rounded-xl p-[20px]">
                        </div>
                        <div>
                            <h1 class="text-base text-black font-medium">Tên<span class="text-red-600">*</span></h1>
                            <input type="text" placeholder="Nhập thông tin tại đây" name="first_name"
                                class="mt-[9px] w-full border-[1px] border-[#E0E0E0] rounded-xl p-[20px]">
                        </div>
                        <div>
                            <h1 class="text-base text-black font-medium">Email<span class="text-red-600">*</span></h1>
                            <input type="text" placeholder="Nhập thông tin tại đây" name="email"
                                class="mt-[9px] w-full border-[1px] border-[#E0E0E0] rounded-xl p-[20px]">
                        </div>
                        <div>
                            <h1 class="text-base text-black font-medium">Số điện thoại<span
                                    class="text-red-600">*</span></h1>
                            <input type="text" placeholder="Nhập thông tin tại đây" name="description"
                                class="mt-[9px] w-full border-[1px] border-[#E0E0E0] rounded-xl p-[20px]">
                        </div>
                    </div>
                    <div class="mt-[24px]">
                        <h1 class="text-base text-black font-medium">Nội dung</h1>
                        <textarea name="description" id="" cols="30" rows="10" placeholder="Nhập thông tin tại đây"
                            class="mt-[9px] w-full border-[1px] border-[#E0E0E0] rounded-xl p-[20px]">

                        </textarea>
                    </div>
                    <button
                        class="text-[20px] uppercase text-white py-[18px] mt-[46px] font-semibold w-full rounded-xl bg-home_primary">Gửi
                        đi</button>
                    <p class="text-black text-sm text-center mt-[21px]">
                        Nếu bạn cần liên hệ thêm hãy liên lạc với hòm thư của chúng tôi <a href=""
                            class="text-home_primary">info@luci.vn</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>