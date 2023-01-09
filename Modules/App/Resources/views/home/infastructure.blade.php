<section class="my-10">
    <div class="h-[100px] rounded-[50%] relative z-10 -mb-[50px] bg-[#F6F9FB]"></div>
    <div class="swiper infastructure">
        <div class="swiper-wrapper">
            @for($i = 0 ; $i < 10;$i++) <div class="swiper-slide">
                <img class="w-full object-cover aspect-square" src="{{asset('assets/images/infas/infas1.png')}}" alt="">
        </div>
        @endfor
    </div>
    <div class="swiper-button-next h-10 w-10 rounded-full bg-[#5f5f5fb3] text-white transition hover:bg-home__primary">
    </div>
    <div class="swiper-button-prev h-10 w-10 rounded-full bg-[#5f5f5fb3] text-white transition hover:bg-home__primary">
    </div>
    </div>
    <div class="h-[100px] rounded-[50%] relative z-10 -mt-[50px] bg-[#F6F9FB]"></div>
</section>

@pushonce('c-script')
<script>
    var infastructure = new Swiper(".infastructure", {
        slidesPerView: 2,
        spaceBetween: 30,
        //loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },
    });
</script>
@endpushonce