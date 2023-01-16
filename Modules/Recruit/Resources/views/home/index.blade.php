@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')

@include('recruit::home.banner')
@include('recruit::home.info')
@include('recruit::home.slide')
@include('recruit::home.job')
@include('recruit::home.step')

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