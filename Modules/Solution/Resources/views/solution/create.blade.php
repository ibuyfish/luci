@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <form action="{{route('admin.solution.store')}}" method="POST">
                @csrf
                <div class="py-2">
                    <h2 class="text-sm mb-2">{{ __('dashboard.global.input_name') }}</h2>
                    <x-component::input.default type="text" name="name" value="{{old('name')}}" />
                    @error('name')
                    <small class="text-[12px] text-red-400">{{ $message }}</small>
                    @enderror
                </div>
                <div class="py-2">
                    <h2 class="text-sm mb-2">{{ __('dashboard.global.input_status') }}</h2>
                    <x-component::select.status name="status" :value="null" />
                </div>
                <div class="section__container bg-home_light_blue">
                    <section class="bg-[#009B71]">
                        <div class="">
                            <x-component::breadcrumb.home-default>
                                <a class="text-[15px] text-white">Về chúng tôi</a>
                                <x-slot name="title">
                                    <h1 class="font-bold text-[18px] text-white mt-2">Về LUCI</h1>
                                </x-slot>
                            </x-component::breadcrumb.home-default>
                            <div class="grid grid-cols-2 lg:grid-cols-9 relative px-6 lg:px-0">
                                <div class="absolute w-full h-20 bg-[#F6F9FB] bottom-0"></div>
                                <div class="col-span-4 lg:pl-[133px] mt-[80px]">
                                    <h2 class="font-semibold text-[60px] uppercase text-white">
                                        <input type="text" name="banner[name]" placeholder="Some Text"
                                            class="bg-home_primary placeholder:text-white w-full">
                                    </h2>
                                    <p class="text-white text-[24px] leading-[32px] mt-[52px]">
                                        <input type="text" name="banner[subname]" placeholder="Some Text"
                                            class="bg-home_primary placeholder:text-white w-full">
                                    </p>
                                    <a class="bg-white inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[80px]">
                                        <div class="flex items-center">
                                            <span class="text-[24px] font-semibold text-home_primary">
                                                <input type="text" name="banner[button]" placeholder="Some Text"
                                                    class="bg-white placeholder:text-white w-full">
                                            </span>
                                            <img class="pl-2 object-cover aspect-video"
                                                src="{{asset('assets/images/icon/green_arrow_right.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-span-5">
                                    <x-component::input.ckfinder-solution name="banner[thumbnail]" value=""
                                        id="banner" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="py-[112px]">
                        <div class="container">
                            <h1 class="text-[40px] font-bold uppercase text-black text-center">
                                <input type="text" name="feature_head[name]" placeholder="Some Text"
                                    class="bg-home_light_blue text-center placeholder:text-black w-full">
                            </h1>
                            <p class="text-[20px] text-black text-center px-[20%] mt-6">
                                <input type="text" name="feature_head[subname]" placeholder="Some Text"
                                    class="bg-home_light_blue text-center placeholder:text-black w-full">
                            </p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-[32px] mt-[69px]">
                                <x-component::solution.solution-feature name="feature_item1" id="feat1" />
                                <x-component::solution.solution-feature name="feature_item2" id="feat2" />
                                <x-component::solution.solution-feature name="feature_item3" id="feat3" />
                                <x-component::solution.solution-feature name="feature_item4" id="feat4" />
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <h1 class="text-[40px] font-bold uppercase text-black text-center">
                                <input type="text" name="optimal_head[name]" placeholder="Some Text"
                                    class="bg-home_light_blue placeholder:text-black">
                            </h1>
                            <x-component::solution.solution-optimal name="optimal_item1" id="optimal1" />
                            <x-component::solution.solution-optimal name="optimal_item2" id="optimal2"
                                order="reverse" />
                            <x-component::solution.solution-optimal name="optimal_item3" id="optimal3" />
                        </div>
                    </section>
                </div>
                <div class="mt-5 w-28">
                    <x-component::button.default type="submit" title="{{ __('dashboard.global.button_create') }}" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection @section('script')
@stack('c-script')
@endsection