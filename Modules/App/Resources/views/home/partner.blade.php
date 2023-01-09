<section class="py-8 ">
    <div class="lg:px-[133px]">
        <div class="flex items-center">
            <h1 class="uppercase font-bold text-home_primary text-[48px]">Đối tác nổi bật</h1>
            <div class="ml-auto">
                <img class="aspect-square cursor-pointer" src="{{asset('assets/images/icon/arrow_circle_next.png')}}"
                    alt="">
            </div>
        </div>
        <div class="swiper partnerSwiper py-5">
            <div class="swiper-wrapper">
                @for($i = 0 ; $i < 10;$i++) <div class="swiper-slide">
                    <div class="rounded-lg aspect-video bg-white shadow-lg overflow-hidden flex items-center">
                        <img class="w-1/2 mx-auto object-cover aspect-video"
                            src="{{asset('assets/images/home/brand1.png')}}" alt="">
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

@pushonce('c-script')
<script>
    var partnerSwiper = new Swiper(".partnerSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        //loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
@endpushonce