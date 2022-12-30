<a
    href="{{ $href }}"
    class="{{request()->is('admin/'. $url) ? 'bg-primary shadow-lg shadow-primary/30' : '' }} rounded-lg mt-2 flex items-center py-[10px] px-[15px] transition duration-300 hover:translate-x-2"
>
    <i class="fa-regular fa-circle text-text text-[10px]"></i>
    <p class="text-text ml-4 text-base">{{ $title }}</p>
</a>
