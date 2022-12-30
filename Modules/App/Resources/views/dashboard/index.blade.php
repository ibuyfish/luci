@extends('layout::layout-default') @section('content')
<div class="min-h-screen bg-background">
    <div class="flex">
        <div class="h-screen w-[260px] bg-secondary shadow-lg">
            <x-component::sidebar.default />
        </div>
        <div class="flex-1 p-7">
            <x-component::header.default />
            <div class="my-5 grid grid-cols-4 gap-x-5">
                @for($i=0;$i < 4 ; $i++)
                <div class="flex items-center rounded-lg bg-secondary p-[21px]">
                    <div class="text-text">
                        <h1 class="text-[21px] font-semibold">21,459</h1>
                        <p class="text-sm">Total Users</p>
                    </div>
                    <div
                        class="ml-auto flex h-[46px] w-[46px] items-center justify-center rounded-full bg-[#7363f7]/20"
                    >
                        <h1 class="text-white">H1</h1>
                    </div>
                </div>
                @endfor
            </div>
            <div>
                <h1>Dog</h1>
            </div>
        </div>
    </div>
</div>
@endsection @section('script') @stack('c-script') @endsection
