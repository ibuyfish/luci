@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <form action="{{route('admin.theme_product.store')}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg lg:col-span-3 bg-secondary p-[14px]">
                        <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                            __('dashboard.theme_product.create_title') }}</h1>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_name') }}</h2>
                            <x-component::input.default type="text" name="name" value="{{old('name')}}" />
                            @error('name')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_subname') }}</h2>
                            <x-component::input.default type="text" name="subname" value="{{old('subname')}}" />
                            @error('subname')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_price') }}</h2>
                            <x-component::input.default type="text" name="price" value="0" />
                            @error('price')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_off') }}</h2>
                            <x-component::input.default type="text" name="off" value="0" />
                            @error('off')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_sale_price') }}</h2>
                            <x-component::input.default type="text" name="sale_price" value="{{old('sale_price')}}" />
                            @error('sale_price')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_color') }}</h2>
                            <x-component::input.color-array name="color[]" value="" />
                            @error('color')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_size') }}</h2>
                            <x-component::input.size-array name="size[]" value="" />
                            @error('size')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_category') }}</h2>
                            <x-component::select.list :datas="$categories"
                                placeholder="{{ __('dashboard.theme_product.category_title') }}"
                                name="theme_category_id" value="" />
                            @error('theme_category_id')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_label') }}</h2>
                            <x-component::select.label name="label" :value="null" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_status') }}</h2>
                            <x-component::select.status name="status" :value="null" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_description') }}</h2>
                            <x-component::textarea.ckeditor name="description" value="{{old('description')}}" />
                        </div>
                        @error('description')
                        <small class="text-[12px] text-red-400">{{ $message }}</small>
                        @enderror
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Title</h2>
                                <x-component::input.default type="text" name="seo_title" value="{{old('seo_title')}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Description</h2>
                                <x-component::input.default type="text" name="seo_description"
                                    value="{{old('seo_description')}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Keywords</h2>
                                <x-component::input.default type="text" name="seo_keyword"
                                    value="{{old('seo_keyword')}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Canonical</h2>
                                <x-component::input.default type="text" name="seo_canonical"
                                    value="{{old('seo_canonical')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="rounded-lg bg-secondary p-[14px]">
                            <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                                __('dashboard.global.input_thumbnail') }}</h1>
                            <x-component::input.ckfinder-default name="thumbnail" value="" />
                            @error('thumbnail')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="rounded-lg bg-secondary p-[14px] mt-3">
                            <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                                __('dashboard.global.input_thumbnail') }}</h1>
                            <x-component::input.ckfinder-array name="images[]" value="" />
                            @error('images')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
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
@endsection @section('script')
<script>
    $("input[name='price']").change(function () {
        $price = $("input[name='price']").val();
        $off = $("input[name='off']").val();
        $sale_price = $("input[name='sale_price']").val();
        $("input[name='sale_price']").val($price - ($price * $off / 100));
    });
    $("input[name='off']").change(function () {
        $price = $("input[name='price']").val();
        $off = $("input[name='off']").val();
        $sale_price = $("input[name='sale_price']").val();
        $("input[name='sale_price']").val($price - ($price * $off / 100));
    });
    $("input[name='sale_price']").change(function () {
        $price = $("input[name='price']").val();
        $off = $("input[name='off']").val();
        $sale_price = $("input[name='sale_price']").val();
        $("input[name='off']").val(Math.ceil($sale_price / $price * 100));
    });
</script>
@stack('c-script') @endsection