@php
$banner = json_decode($model->translations[0]->banner)
@endphp
<section class="bg-[#009B71] lg:pb-10">
    <div class="">
        <x-component::breadcrumb.home-default>
            <a class="text-[15px] text-white">Về chúng tôi</a>
            <x-slot name="title">
                <h1 class="font-bold text-[18px] text-white mt-2">Về LUCI</h1>
            </x-slot>
        </x-component::breadcrumb.home-default>
        <div class="grid grid-cols-2 lg:grid-cols-9 relative px-6 lg:px-0">
            <div class="col-span-4 lg:pl-[133px] mt-[80px]">
                <h2 class="font-semibold text-[40px] lg:text-[60px] uppercase text-white">
                    {{$banner->name}}
                </h2>
                <p class="text-white text-base lg:text-[24px] leading-[32px] mt-[52px]">
                    {{$banner->subname}}
                </p>
                <a href="" class="bg-white inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[80px]">
                    <div class="flex items-center">
                        <span class="text-base lg:text-[24px] font-semibold text-home_primary">
                            {{$banner->button}}
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/green_arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-span-5 flex -mb-20">
                <img class="ml-auto mt-auto z-10 relative" src="{{env('APP_URL').$banner->thumbnail}}" alt="">
            </div>
        </div>
    </div>
</section>
<div class="w-full h-20 bg-[#F6F9FB] bottom-0"></div>