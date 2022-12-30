<div class="mt-2">
    <div
        class="{{request()->is('admin/'. $url .'/*') ? 'bg-background' : '' }} t-collapse flex cursor-pointer items-center rounded-lg py-[10px] px-[15px] transition duration-300 hover:translate-x-2"
    >
        <i class="{{ $icon }} text-[12px]"></i>
        <p class="ml-4 text-base font-medium">{{ $title }}</p>
        <img
            src="{{ asset('assets/images/angle-right.svg') }}"
            class="img ml-auto h-4 w-4 transition"
            alt=""
        />
    </div>
    <div
        class="t-collapse-menu {{request()->is('admin/'. $url .'/*') ? 'block' : 'hidden' }}"
    >
        {{ $slot }}
    </div>
</div>

@pushonce('c-script')
<script>
    $(".t-collapse").on("click", function (e) {
        if ($(this).hasClass("bg-background")) {
            $(this).removeClass("bg-background");
            $(this).children(".img").removeClass("rotate-90");
            $(this).next().slideUp("fast");
        } else {
            $(this).children(".img").addClass("rotate-90");
            $(this).addClass("bg-background");
            $(this).next().slideDown("fast");
        }
    });
</script>
@endpushonce
