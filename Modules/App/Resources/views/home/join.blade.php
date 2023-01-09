<section class="mt-8 relative" style="background-image:url({{asset('assets/images/home/ask_bg.png')}})">
    <div class="lg:px-[133px]">
        <div class="grid grid-cols-11 gap-16 py-16">
            <div class="col-span-5">
                <img class="w-full aspect-video object-cover rounded-bl-lg rounded-tr-lg"
                    src="{{asset('assets/images/home/join1.png')}}" alt="">
            </div>
            <div class="col-span-6">
                <h1 class="text-black font-bold text-[48px] uppercase">Tham gia cùng <br>
                    đội ngũ giỏi nhất</h1>
                <p class="text-[#2E2E2E] text-[20px] mt-5 font-medium w-2/3">Cùng nhau, chúng ta là lực lượng sẽ biến
                    đổi một
                    cách
                    cụ thể các khu đô thị thông minh, tạo ra một
                    bước chuyển dịch chuyển công nghệ.</p>
                <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                    <div class="flex items-center">
                        <span class="text-[24px] font-semibold text-white">
                            Đọc thêm về chúng tôi
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <img class="absolute right-3 bottom-0" src="{{asset('assets/images/icon/join_icon.png')}}" alt="">
</section>

@pushonce('c-script')
<script>

</script>
@endpushonce