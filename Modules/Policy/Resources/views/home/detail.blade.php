@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')
<section class="bg-[#DCF0E2]">
    <div class="bg-white/40">
        <div class="container py-4">
            <div class="flex">
                <a class="text-[15px] text-home_primary" href="{{route('home')}}">Trang chủ</a>
                <p class="text-home_primary mx-2">/</p>
                <a class="text-[15px] text-home_primary">{{ translate($model,'name') }}</a>
            </div>
            <div>
                <h1 class="font-bold text-[18px] text-home_primary mt-2">{{ translate($model,'name') }}</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h1 class="text-black font-semibold text-[40px] text-center mt-10">{{ translate($model,'name') }}</h1>
        <div class="py-10">
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