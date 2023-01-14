@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')

@include('service::home.detail.banner')
@include('service::home.detail.about')
@include('service::home.detail.service')
@include('service::home.detail.step')
@include('service::home.detail.foundation')

@endsection

@section('footer')
<x-component::footer.home-footer />
@endsection

@section('script')

@stack('c-script')
@endsection