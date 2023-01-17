@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')
<section class="">
    <div class="bg-white px-[15px] lg:px-0">
        <div class="container py-4">
            <div class="flex">
                <a class="text-[15px] text-home_primary" href="{{route('home')}}">Trang chủ</a>
                <p class="text-home_primary mx-2">/</p>
                <a class="text-[15px] text-home_primary">{{translate($model,'name')}}</a>
            </div>
            <div>
                <h1 class="font-bold text-[18px] text-home_primary mt-2">{{translate($model,'name')}}</h1>
            </div>
        </div>
    </div>
</section>
<section class="px-[15px] lg:px-0 py-[36px] bg-no-repeat"
    style="background-image:url({{asset('/assets/images/bg-decor1.png')}})">
    <div class="container grid grid-cols-1 lg:grid-cols-12 lg:gap-[32px]">
        <div class="col-span-7 relative">
            <a href="{{route('home.blog_category.detail',[$blogs[0]->id,slug($blogs[0],'name')])}}"
                class="block relative aspect-video bg-cover bg-no-repeat rounded-xl overflow-hidden">
                <img class="w-full h-full object-cover relative" src="{{env('APP_URL').$blogs[0]->thumbnail}}" alt="">
                <div class="absolute w-full z-10 bottom-0 p-8">
                    <p class="font-semibold text-sm text-white">{{$blogs[0]->created_at->format('d/m/Y')}}</p>
                    <h1 class="text-lg lg:text-[32px] text-white font-semibold mt-[13px]">
                        {{translate($blogs[0],'name')}}
                    </h1>
                    <p class="text-sm lg:text-base text-white font-medium mt-[13px]">{{translate($blogs[0],'subname')}}
                    </p>
                </div>
            </a>
        </div>
        <div class="col-span-5 flex flex-col gap-6 mt-5 lg:mt-0">
            @foreach($blogs->slice(0,4) as $blog)
            <a href="{{route('home.blog_category.detail',[$blog->id,slug($blog,'name')])}}" class="flex gap-2 lg:gap-8">
                <div class="w-1/3 overflow-hidden rounded-xl">
                    <img src="{{env('APP_URL').$blog->thumbnail}}" alt="" class="w-full h-full">
                </div>
                <div class="flex flex-col justify-center w-2/3">
                    <p class="text-xs text-black">{{$blog->created_at->format('d/m/Y')}}</p>
                    <h1 class="text-base lg:text-[24px] mt-1 font-semibold text-black">
                        {{limit(translate($blog,'name'),50)}}
                    </h1>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="container mt-[49px] mb-20">
        <h1 class="text-[24px] lg:text-[40px] text-black font-bold uppercase">Tin tức</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-[29px] mt-[32px]">
            @foreach($blogs as $blog)
            <a href="{{route('home.blog_category.detail',[$blog->id,slug($blog,'name')])}}" class="block">
                <div class="aspect-video overflow-hidden rounded-xl">
                    <img class="w-full h-full" src="{{env('APP_URL').$blog->thumbnail}}" alt="">
                </div>
                <div class="mt-[18px]">
                    <p class="text-xs lg:text-base text-black">{{$blog->created_at->format('d/m/Y')}}</p>
                    <h1 class="text-lg lg:text-[24px] font-semibold text-black mt-[9px]">{{translate($blog,'name')}}
                    </h1>
                    <p class="text-sm lg:text-[18px] text-black mt-[9px]">{{translate($blog,'subname')}}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('footer')
<x-component::footer.home-footer />
@endsection

@section('script')
<script>
    var swiper = new Swiper(".mySwiper", {});
</script>
@stack('c-script')
@endsection