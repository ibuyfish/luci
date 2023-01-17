@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <form action="{{route('admin.blog.update',$model->id)}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg lg:col-span-3 bg-secondary p-[14px]">
                        <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">{{
                            __('dashboard.blog.create_title') }}</h1>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_name') }}</h2>
                            <x-component::input.default type="text" name="name" value="{{translate($model,'name')}}" />
                            @error('name')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_subname') }}</h2>
                            <x-component::input.default type="text" name="subname"
                                value="{{translate($model,'subname')}}" />
                            @error('subname')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_author') }}</h2>
                            <x-component::input.default type="text" name="author" value="{{$model->author}}" />
                            @error('author')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">Danh mục</h2>
                            <x-component::select.list name="blog_category_id" placeholder="Chọn danh mục"
                                :datas="$blog_categories" :value="$model->category" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_status') }}</h2>
                            <x-component::select.status name="status" :value="$model->status" />
                        </div>
                        <div class="py-2">
                            <h2 class="text-sm mb-2">{{ __('dashboard.global.input_description') }}</h2>
                            <x-component::textarea.ckeditor name="description"
                                value="{{isset($model->translations) ? translate($model,'description') : old('description')}}" />
                            @error('description')
                            <small class="text-[12px] text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="rounded-lg bg-secondary p-[14px]">
                            <h1 class="text-base pb-3 font-semibold border-b-[1px] border-b-g_divider">Thumbnail</h1>
                            <x-component::input.ckfinder-default name="thumbnail"
                                value="{{isset($model->thumbnail) ? $model->thumbnail : null }}" />
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