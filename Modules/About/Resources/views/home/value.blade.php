<section class="py-[70px]">
    <div class="container">
        <div class="grid lg:grid-cols-9 gap-[90px]">
            <div class="lg:col-span-4 mt-[60px]">
                <h1 class="text-[60px] font-bold uppercase text-home_primary">Giá trị cốt lõi - 5T</h1>
                <div class="mt-10">
                    @foreach($datas as $data)
                    <div class="mt-5">
                        <h1 class="flex items-center">
                            <i class="fa-solid fa-circle text-home_primary text-[8px]"></i>
                            <span
                                class="text-home_primary uppercase font-bold text-[24px] ml-5">{{$data['name']}}</span>
                        </h1>
                        <p class="font-medium text-[20px] pl-8 mt-3">
                            {{$data['description']}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5">
                <img class="object-cover w-full aspect-auto" src="{{asset('assets/images/about/value.png')}}" alt="">
            </div>
        </div>
    </div>
</section>