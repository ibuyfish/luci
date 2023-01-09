<section class="bg-white/20">
    <div class="container py-4">
        <div class="flex">
            <a class="text-[15px] text-white" href="{{route('home')}}">Trang chủ</a>
            <p class="text-white">/</p>
            {{$slot}}
        </div>
        <div>
            {{$title}}
        </div>
    </div>
</section>