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
<section class="mt-[60px] px-[15px] lg:px-0">
    <div class="container">
        <h1 class="text-[32px] lg:text-[40px] text-black font-semibold">{{translate($model,'name')}}
        </h1>
        <div class="flex flex-wrap py-6 px-2 border-b-[2px] border-[#ebebeb] border-t-[2px] gap-8 mt-[27px]">
            <div class="flex lg:w-auto">
                <img class="w-5 h-5 object-cover" src="{{asset('assets/images/icon/blog_user.png')}}" alt="">
                <p class="text-sm text-black text-medium ml-2">{{$model->author}}</p>
            </div>
            <div class="flex lg:w-auto">
                <img class="w-5 h-5 object-cover" src="{{asset('assets/images/icon/blog_date.png')}}" alt="">
                <p class="text-sm text-black text-medium ml-2">{{$model->created_at->format('d/m/Y')}}</p>
            </div>
            <div class="flex lg:w-auto">
                <img class="w-5 h-5 object-cover" src="{{asset('assets/images/icon/blog_category.png')}}" alt="">
                <p class="text-sm text-black text-medium ml-2">{{translate($model->category,'name')}}</p>
            </div>
            <div class="flex lg:w-auto">
                <img class="w-5 h-5 object-cover" src="{{asset('assets/images/icon/blog_eye.png')}}" alt="">
                <p class="text-sm text-black text-medium ml-2">{{$model->view}}</p>
            </div>
        </div>
        <div class="py-6 overflow-auto">
            {!! translate($model,'description') !!}
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