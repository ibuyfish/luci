@php
$optimals = json_decode($model->translations[0]->optimal);
@endphp
<section>
    <div class="container px-[15px] lg:px-0">
        <h1 class="text-[32px] lg:text-[40px] font-bold uppercase text-black text-center">
            {{$optimals->name}}
        </h1>
        @foreach($optimals->array as $optimal)
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[135px] items-center mt-[90px]">
            <img class="aspect-[16/12] object-cover rounded-xl" src="{{env('APP_URL').$optimal->image}}" alt="">
            <div class="{{$loop->even ? 'lg:order-first order-last' : ''}}">
                <h1 class="uppercase text-black text-[24px] lg:text-[36px] font-bold">{{$optimal->name}}</h1>
                <ul class="list-disc list-inside mr-3 text-base lg:text-[20px] text-[#545454] mt-8">
                    @if(isset($optimal->list))
                    @foreach($optimal->list as $list)
                    <li>{{$list}}</li>
                    @endforeach
                    @endif
                </ul>
                <a href="" class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
                    <div class="flex items-center">
                        <span class="text-base lg:text-[24px] font-semibold text-white">
                            {{$optimal->button}}
                        </span>
                        <img class="pl-2 object-cover aspect-video"
                            src="{{asset('assets/images/icon/arrow_right.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>