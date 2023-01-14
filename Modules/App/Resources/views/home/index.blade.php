@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')

@include('app::home.banner')
<section class="py-8" style="background-image:url({{asset('assets/images/bg-decor1.png')}})">
    <div class="grid grid-cols-1 lg:grid-cols-9 items-center px-4 lg:px-0">
        <div class="lg:pl-[133px] col-span-4">
            <h1 class="uppercase text-[32px] text-center lg:text-start lg:text-[60px] font-bold text-home_primary">Tầm
                nhìn - sứ mệnh</h1>
            <h2 class="text-black font-bold text-[24px] text-center lg:text-start lg:text-[60px]">Inspire Life With
                Technology</h2>
            <p class="text-black text-base lg:text-[24px] 2xl:leading-9">Công ty Cổ phần Luci là Công ty công nghệ tiên
                phong nghiên
                cứu và phát
                triển giải
                pháp ứng dụng cho đô
                thị thông minh. Với lợi thế đã có kinh nghiệm triển khai các dự án trong và ngoài nước về IoT (Internet
                of Thing – Kết nối vạn vật), Luci mong muốn đem lại các giải pháp phục vụ Hệ sinh thái Đô thị thông minh
                của Việt Nam.
            </p>
            <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                <div class="flex items-center">
                    <span class="text-base lg:text-[24px] font-semibold text-white">
                        Đọc thêm về chúng tôi
                    </span>
                    <img class="pl-2 object-cover aspect-video" src="{{asset('assets/images/icon/arrow_right.png')}}"
                        alt="">
                </div>
            </a>
        </div>
        <div class="col-span-5 py-5 lg:py-1">
            <img src="{{asset('assets/images/banner_house.png')}}" alt="">
        </div>
    </div>
</section>
@include('app::home.infastructure')
@include('app::home.enviroment')
@include('app::home.more')
@include('app::home.fact')
@include('app::home.partner')
@include('app::home.join')
@include('app::home.blog')
@include('app::home.contact')
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