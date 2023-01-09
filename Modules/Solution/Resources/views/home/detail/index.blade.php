@extends('layout::home-layout')
@section('css')

@endsection

@section('header')
<x-component::header.home-header />
@endsection

@section('content')

@include('solution::home.detail.banner')
@include('solution::home.detail.feature')
@include('solution::home.detail.optimal')
@include('solution::home.detail.include')
@include('solution::home.detail.step')

@endsection

@section('footer')
<x-component::footer.home-footer />
@endsection

@section('script')

@stack('c-script')
@endsection