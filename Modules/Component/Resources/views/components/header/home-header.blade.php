<section>
    <div class="container flex flex-row items-stretch">
        <div class="py-[14px] mr-auto">
            <img src="{{asset('assets/images/home/logo.png')}}" alt="...">
        </div>
        <div class="grid grid-cols-7 items-center gap-[45px] mr-[32px]">
            <h1 class="text-lg font-semibold text-home_text"><a href="{{route('home')}}">Trang chu</a></h1>
            <h1 class="text-lg font-semibold text-home_text"><a href="{{route('home.contact.detail')}}">Về chúng tôi</a>
            </h1>
            <div class="group bg-red-200 h-full flex items-center justify-center relative">
                <h1 class="text-lg text-home_text">Giải pháp</h1>
                <div class="group-hover:block hidden absolute z-10 top-[90px] bg-white shadow-lg w-[300px]">
                    @foreach($solutions as $solution)
                    <a href="{{route('home.solution.detail',$solution->id)}}"
                        class="block p-3 bg-white hover:bg-home_primary hover:text-white transition">{{translate($solution,'name')}}</a>
                    @endforeach
                </div>
            </div>
            <h1 class="text-lg text-home_text">Trang chu</h1>
            <h1 class="text-lg text-home_text">Trang chu</h1>
            <h1 class="text-lg text-home_text">Trang chu</h1>
            <h1 class="text-lg text-home_text">Trang chu</h1>
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
            <a href="" class="flex px-[18px] py-[11px] bg-home_primary rounded-md">
                <span class="text-base text-white font-semibold">Liên hệ</span>
                <img class="ml-[15px]" src="{{asset('assets/images/home/chat.png')}}" alt="">
            </a>
        </div>
    </div>
</section>