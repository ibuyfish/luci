@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="block lg:flex">
        <x-component::sidebar.default />
        <div class="flex-1 p-7">
            <x-component::header.default />
            <x-component::dashboard.cart-count />
            <div class="rounded-lg bg-secondary p-[14px]">
                <div class="mb-5 flex items-center gap-5">
                    <h1 class="text-base">{{ __('dashboard.recruit_applicant.list') }}</h1>
                    <div class="ml-auto lg:w-[400px]">
                        <form>
                            <x-component::input.default type="text" name="search" />
                        </form>
                    </div>
                    <div class="w-[120px]">
                        <x-component::button.href href="{{route('admin.recruit_applicant.create')}}"
                            title="{{ __('dashboard.global.button_create') }}" />
                    </div>
                </div>
                <div class="overflow-x-auto lg:overflow-visible min-w-full">
                    <table class="w-[800px] lg:min-w-full" id="table">
                        <thead>
                            <tr>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    Id
                                </th>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    {{ __('dashboard.global.input_name') }}
                                </th>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    Email
                                </th>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    {{ __('dashboard.global.input_created_at') }}
                                </th>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    {{ __('dashboard.global.input_status') }}
                                </th>
                                <th class="text-text py-3 text-center text-sm uppercase font-medium">
                                    {{ __('dashboard.global.input_action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($models as $model)
                            <tr>
                                <td class="text-text p-3 text-start text-sm">
                                    {{$model->id}}
                                </td>
                                <td class="text-text p-3 text-start text-sm">
                                    {{$model->name}}
                                </td>
                                <td class="text-text p-3 text-start text-sm">
                                    {{$model->email}}
                                </td>
                                <td class="text-text p-3 text-start text-sm">
                                    {{ $model->created_at->format('d/m/Y') }}
                                </td>
                                <td class="text-text p-3 text-center text-[12px] ">
                                    @if($model->status == 1)
                                    <span class="toggleShow bg-active/25 rounded-full px-2 py-1 text-active"
                                        data-rowid="{{$model->id}}">Active</span>
                                    @else
                                    <span class="toggleShow bg-red-400/25 rounded-full px-2 py-1 text-red-400"
                                        data-rowid="{{$model->id}}">Hidden</span>
                                    @endif
                                </td>
                                <td tabindex="1"
                                    class="text-text relative group cursor-pointer p-3 text-center text-base overflow-hidden focus-within:overflow-visible">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                    <div
                                        class="absolute z-10 w-[120px] -ml-10 mt-[30px] rounded-sm bg-secondary px-5 opacity-1 shadow-2xl transition duration-300 group-focus:-translate-y-[18px] group-focus:opacity-100">
                                        <div
                                            class="text-text py-[10px] text-start text-sm transition hover:text-primary">
                                            <button class="setTop" data-rowid="{{$model->id}}">
                                                <i class="fa-solid fa-up-long"></i>
                                                <span class="ml-2">Top</span>
                                            </button>
                                        </div>
                                        <div
                                            class="text-text py-[10px] text-start text-sm transition hover:text-primary">
                                            <a href="{{route('admin.recruit_applicant.edit',$model->id)}}">
                                                <i class="fa-solid fa-pen"></i>
                                                <span class="ml-2">Edit</span>
                                            </a>
                                        </div>
                                        <div onclick="openDeleteModal(`{{$model->id}}`)"
                                            class="text-text py-[10px] text-start text-sm transition hover:text-primary">
                                            <a>
                                                <i class="fa-solid fa-trash"></i>
                                                <span class="ml-2">Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $models->render('component::components.pagination.default') !!}
            </div>
        </div>
    </div>
</div>
<x-component::modal.delete url="{{route('admin.recruit_applicant.delete')}}" />
@endsection @section('script')
<script>
    $("#table").on("click", ".setTop", function (e) {
        e.preventDefault();
        var id = $(this).data("rowid");
        var _token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: `{{route('admin.recruit_applicant.setTop')}}`,
            type: "POST",
            data: { _token: _token, id: id },
            success: function (responese) {
                $("#table").load(location.href + " #table");
            },
        });
    });
    $("#table").on("click", ".toggleShow", function (e) {
        e.preventDefault();
        var id = $(this).data("rowid");
        var _token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: `{{route('admin.recruit_applicant.toggleShow')}}`,
            type: "POST",
            data: { _token: _token, id: id },
            success: function (responese) {
                $("#table").load(location.href + " #table");
            },
        });
    });
</script> @stack('c-script') @endsection