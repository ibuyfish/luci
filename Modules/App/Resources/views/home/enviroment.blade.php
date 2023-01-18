<section class="py-8 lg:px-0 px-4">
    <div class="lg:px-[133px]">
        <div class="flex items-center">
            <h1 class="uppercase font-bold text-home_primary text-[28px] lg:text-[80px]">HỆ SINH THÁI LUCI</h1>
            <div class="ml-auto w-[40px] lg:w-auto">
                <img class="aspect-square" src="{{asset('assets/images/icon/arrow_circle_next.png')}}" alt="">
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-5 lg:pt-8 lg:pb-0 pb-0">
            <div class="lg:col-span-2">
                <a href="{{route('home.solution.detail',1)}}">
                    <img class="object-cover aspect-video lg:aspect-auto w-full h-full rounded-lg"
                        src="{{asset('assets/images/envi/1.png')}}" alt="">
                </a>
            </div>
            <div class="lg:col-span-1">
                <a href="{{route('home.solution.detail',2)}}">
                    <img class="object-cover aspect-video lg:aspect-auto w-full h-full rounded-lg"
                        src="{{asset('assets/images/envi/2.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-5 mt-5">
            <div class="lg:col-span-1">
                <a href="{{route('home.solution.detail',3)}}">
                    <img class="object-cover w-full aspect-video lg:aspect-auto h-full rounded-lg"
                        src="{{asset('assets/images/envi/3.png')}}" alt="">
                </a>
            </div>
            <div class="lg:col-span-1">
                <a href="{{route('home.solution.detail',4)}}">
                    <img class="object-cover w-full aspect-video lg:aspect-auto h-full rounded-lg"
                        src="{{asset('assets/images/envi/4.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>