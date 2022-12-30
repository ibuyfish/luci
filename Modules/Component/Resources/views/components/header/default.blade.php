<div class="flex rounded-lg bg-secondary py-[12px] px-[14px]">
    <div class="flex items-center gap-4">
        <div id="togg" class="block lg:hidden"><i class="fa-solid fa-bars text-[25px]"></i></div>
        <a href="{{ route('admin.locale.en') }}" class="mr-3">En</a>
        <a href="{{ route('admin.locale.vi') }}">Vi</a>
    </div>
    <div class="group relative ml-auto cursor-pointer items-center overflow-hidden focus:overflow-visible" tabindex="1">
        <div class="relative flex">
            <div class="pr-3">
                <h1 class="text-text text-sm font-semibold">John Doe</h1>
                <p class="text-text text-end text-[12px]">Admin</p>
            </div>
            <img src="{{ asset('assets/images/avatar-11.jpg') }}" class="h-10 w-10 rounded-full" alt="..." />
        </div>
        <div
            class="absolute z-10 -ml-10 mt-[30px] w-[160px] rounded-sm bg-secondary opacity-0 shadow-xl transition duration-300 group-focus:-translate-y-[18px] group-focus:opacity-100">
            <h1 class="text-text py-[10px] px-[18px] text-sm">Profile</h1>
            <h1 class="text-text py-[10px] px-[18px] text-sm">Profile</h1>
            <h1 class="text-text py-[10px] px-[18px] text-sm">Profile</h1>
            <h1 class="text-text py-[10px] px-[18px] text-sm">Profile</h1>
            <h1 class="text-text py-[10px] px-[18px] text-sm">Profile</h1>
        </div>
    </div>
</div>