@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <form action="{{route('admin.blog_category.store')}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg lg:col-span-3 bg-secondary p-[14px]">
                        <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                            __('dashboard.blog_category.create_title') }}</h1>
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
                    </div>

                </div>
                <div class="mt-5 w-28">
                    <x-component::button.default type="submit" title="{{ __('dashboard.global.button_create') }}" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection @section('script') @stack('c-script') @endsection