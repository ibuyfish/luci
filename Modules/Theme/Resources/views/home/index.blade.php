@extends('layout::theme-home')
@section('header')
<x-component::theme.header />
@endsection
@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($products as $product)
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a href="{{route('theme.detail',[$product->id,Str::slug(Helper::trans($product,'name'))])}}"
                    class="block relative rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                        src="{{env('APP_URL').$product->thumbnail}}">
                </a>
                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                        {{Helper::trans($product->category,'name')}}</h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{Helper::trans($product,'name')}}</h2>
                    <p class="mt-1">{{$product->sale_price}}d</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('footer')
<x-component::theme.footer />
@endsection