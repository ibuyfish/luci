<section class="lg:block hidden">
    <div class="container flex flex-row items-stretch">
        <div class="py-[14px] mr-auto">
            <img src="{{asset('assets/images/home/logo.png')}}" alt="...">
        </div>
        <div class="grid grid-cols-6 items-center gap-[45px]">
            <h1 class="text-lg font-semibold text-home_text"><a href="{{route('home')}}">Trang chu</a></h1>
            <h1 class="text-lg font-semibold text-home_text"><a href="{{route('home.about.detail')}}">Về chúng tôi</a>
            </h1>
            <div class="group h-full flex items-center justify-center relative">
                <h1 class="text-lg text-home_text">Giải pháp</h1>
                <div class="group-hover:block hidden absolute z-10 top-[90px] bg-white shadow-lg w-[300px]">
                    @foreach($solutions as $solution)
                    <a href="{{route('home.solution.detail',$solution->id)}}"
                        class="block p-3 bg-white hover:bg-home_primary hover:text-white transition">{{translate($solution,'name')}}</a>
                    @endforeach
                </div>
            </div>
            <div class="group h-full flex items-center justify-center relative">
                <h1 class="text-lg text-home_text">Dịch vụ</h1>
                <div class="group-hover:block hidden absolute z-10 top-[90px] bg-white shadow-lg w-[300px]">
                    <a href="{{route('home.service.detail')}}"
                        class="block p-3 bg-white hover:bg-home_primary hover:text-white transition">Dich vu</a>
                </div>
            </div>
            <h1 class="text-lg text-home_text">Trang chu</h1>
            <h1 class="text-lg text-home_text"><a href="{{route('home.recruit.detail')}}">Tuyển dụng</a></h1>
        </div>
        <div class="bg-[#C9C9C9] w-[1px] mr-[25px]"></div>
        <div class="flex items-center mr-4">
            <img src="{{asset('assets/images/search.png')}}" alt="">
        </div>
        <div class="flex items-center mr-4">
            <select name="" id="" class="font-semibold p-1">
                <option value="vi">VN</option>
                <option value="en">EN</option>
            </select>
        </div>
        <div class="flex items-center">
            <a href="{{route('home.contact.detail')}}" class="flex px-[18px] py-[11px] bg-home_primary rounded-md">
                <span class="text-base text-white font-semibold">Liên hệ</span>
                <img class="ml-[15px]" src="{{asset('assets/images/home/chat.png')}}" alt="">
            </a>
        </div>
    </div>
</section>
<!-- Header Mobile -->
<section class="block lg:hidden border-b-[1px] border-[#ebebeb] relative z-10 shadow-lg">
    <div class="flex py-2 px-1">
        <div class="flex items-center openMobileNav">
            <img class="w-[30px] mx-auto" src="{{asset('assets/images/icon/menu.png')}}" alt="">
        </div>
        <div class="flex items-center mx-auto">
            <img src="{{asset('assets/images/home/logo.png')}}" alt="">
        </div>
        <div class="flex items-center">
            <img src="{{asset('assets/images/search.png')}}" alt="">
        </div>
    </div>
</section>
<div class="mobileNav fixed h-screen w-screen hidden top-0 z-20 bg-red-200">
    <div class="grid grid-cols-5">
        <div class="bg-blue-200 h-screen col-span-3">

        </div>
        <div class="closeMobileNav h-screen col-span-2 w-full bg-[#00000066]">

        </div>
    </div>
</div>

@pushonce('c-script')
<script>
    $('.openMobileNav').on('click', function () {
        $('.mobileNav').fadeIn('fast');
    });
    $('.closeMobileNav').on('click', function () {
        $('.mobileNav').fadeOut('fast');
    })
</script>
@endpushonce