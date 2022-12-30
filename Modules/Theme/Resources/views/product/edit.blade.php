@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <form action="{{route('admin.theme_product.update',$model->id)}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg lg:col-span-3 bg-secondary p-[14px]">
                        <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                            __('dashboard.theme_product.create_title') }}</h1>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_name') }}</h2>
                            <x-component::input.default type="text" name="name"
                                value="{{Helper::trans($model,'name')}}" />
                            @error('name')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_subname') }}</h2>
                            <x-component::input.default type="text" name="subname"
                                value="{{Helper::trans($model,'subname')}}" />
                            @error('subname')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_price') }}</h2>
                            <x-component::input.default type="text" name="price" :value="$model->price" />
                            @error('price')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_off') }}</h2>
                            <x-component::input.default type="text" name="off" :value="$model->off" />
                            @error('off')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_sale_price') }}</h2>
                            <x-component::input.default type="text" name="sale_price" :value="$model->sale_price" />
                            @error('sale_price')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 lg:w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_color') }}</h2>
                            <x-component::input.color-array name="color[]" :value="json_decode($model->color)" />
                            @error('color')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2 lg:w-1/2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_size') }}</h2>
                            <x-component::input.size-array name="size[]" :value="json_decode($model->size)" />
                            @error('size')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_category') }}</h2>
                            <x-component::select.list :datas="$categories"
                                placeholder="{{ __('dashboard.theme_product.category_title') }}"
                                name="theme_category_id" :value="$model->category" />
                            @error('theme_category_id')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_label') }}</h2>
                            <x-component::select.label name="label" :value="$model->label" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_status') }}</h2>
                            <x-component::select.status name="status" :value="$model->status" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_description') }}</h2>
                            <x-component::textarea.ckeditor name="description"
                                value="{{isset($model->translations) ? Helper::trans($model,'description') : old('description')}}" />
                            @error('description')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Title</h2>
                                <x-component::input.default type="text" name="seo_title"
                                    value="{{$model->seo_title}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Description</h2>
                                <x-component::input.default type="text" name="seo_description"
                                    value="{{$model->seo_description}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Keywords</h2>
                                <x-component::input.default type="text" name="seo_keyword"
                                    value="{{$model->seo_keyword}}" />
                            </div>
                            <div class="py-2">
                                <h2 class="text-sm mb-2">Seo Canonical</h2>
                                <x-component::input.default type="text" name="seo_canonical"
                                    value="{{$model->seo_canonical}}" />
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="rounded-lg bg-secondary p-[14px]">
                            <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">Thumbnail</h1>
                            <x-component::input.ckfinder-default name="thumbnail"
                                value="{{isset($model->thumbnail) ? $model->thumbnail : null }}" />
                            @error('thumbnail')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="rounded-lg bg-secondary p-[14px] mt-3">
                            <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                                __('dashboard.global.input_thumbnail') }}</h1>
                            <x-component::input.ckfinder-array name="images[]" :value="$model->images" />
                            @error('images')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-5 w-28">
                    <x-component::button.default type="submit" title="Create" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection @section('script') @stack('c-script') @endsection