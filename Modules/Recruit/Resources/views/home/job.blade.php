<section>
    <div class="container">
        <h1 class="text-[50px] uppercase text-black font-bold">Luci tuyển dụng</h1>
    </div>
</section>

<section class="mt-[48px]">
    <div class="bg-white mx-[130px] rounded-xl p-[39px] relative z-10">
        <div class="relative">
            <h1 class="font-bold text-black text-[20px] border-b-[1px] border-[#cccccc] py-5">
                {{translate($recruits[0],'name')}}
            </h1>
            <img class="toggleDropDown active cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_minus.png')}}" alt="">
            <div class="dropDownContainer">
                <div class="grid grid-cols-2 gap-[60px] py-8">
                    <div class="">
                        <h1 class="text-[24px]">
                            <span class="font-medium text-black">
                                {{translate($recruits[0],'subname')}} -
                            </span>
                            <span class="text-home_primary">
                                Thời gian tuyển dụng còn 15
                                ngày
                            </span>
                        </h1>
                        <p class="text-[20px] font-medium text-[#2E2E2E] mt-3">
                            {!! translate($recruits[0],'description') !!}
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
                        <img class="rounded-lg w-full object-cover aspect-video"
                            src="{{env('APP_URL').$recruits[0]->thumbnail}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @foreach($recruits as $recruit)
        @if($loop->first) @continue @endif
        <div class="relative">
            <h1 class="font-bold text-black text-[20px] border-b-[1px] border-[#cccccc] py-5">
                {{translate($recruit,'name')}}
            </h1>
            <img class="toggleDropDown cursor-pointer ml-auto absolute right-2 top-5"
                src="{{asset('assets/images/icon/green_plus.png')}}" alt="">
            <div class="dropDownContainer hidden">
                <div class="grid grid-cols-2 gap-[60px] py-8">
                    <div class="">
                        <h1 class="text-[24px]">
                            <span class="font-medium text-black">
                                {{translate($recruit,'subname')}} -
                            </span>
                            <span class="text-home_primary">
                                Thời gian tuyển dụng còn 15
                                ngày
                            </span>
                        </h1>
                        <p class="text-[20px] font-medium text-[#2E2E2E] mt-3">
                            {!! translate($recruit,'description') !!}
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
                        <img class="rounded-lg w-full object-cover aspect-video"
                            src="{{env('APP_URL').$recruit->thumbnail}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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