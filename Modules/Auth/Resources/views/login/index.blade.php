@extends('layout::layout-default') @section('content')
<div class="h-screen">
    <div class="grid h-full grid-cols-6">
        <div
            class="col-span-4 flex h-full items-center justify-center bg-background"
        >
            <img src="{{ asset('assets/images/login-v2.svg') }}" alt="" />
        </div>
        <div class="col-span-2 flex h-full items-center bg-secondary p-[56px]">
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="">
                    <h1 class="mb-[14px] text-2xl text-text">
                        Welcome to Dashboard!
                    </h1>
                    <p class="mb-[21px] text-sm text-text">
                        Please sign-in to your account and start the adventure
                    </p>
                    <p class="pb-2 text-[12px] text-text">Email</p>
                    <x-component::input.default value="admin@demo.com" name="email" type="email" />
                    <p class="mt-2 pb-2 text-[12px] text-text">Password</p>
                    <x-component::input.default name="password" value="123456789" type="password" />
                    <div class="mt-5">
                        <x-component::button.default title="Sign in" type="submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
