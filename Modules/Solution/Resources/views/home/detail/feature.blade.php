@php
$features = json_decode($model->translations[0]->feature);
@endphp
<section class="py-[112px]">
    <div class="container">
        <h1 class="text-[40px] font-bold uppercase text-black text-center">{{$features->name}}
        </h1>
        <p class="text-[20px] text-black text-center px-[20%] mt-6">
            {{$features->subname}}
        </p>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-[32px] mt-[69px]">
            @foreach($features->array as $feature)
            <div class="px-[14px] py-[19px] bg-home_primary overflow-hidden rounded-xl relative">
                <img class="absolute bottom-2 right-2 w-[150px] h-[188px] opacity-10"
                    src="{{asset('assets/images/icon/join_icon.png')}}" alt="">
                <img class="object-cover aspect-video rounded-lg" src="{{env('APP_URL').$feature->image}}" alt="">
                <div class="flex bg-white mt-5 rounded-lg items-center px-2 py-1">
                    <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
                    <h1 class="text-black text-[20px] font-semibold uppercase text-center flex-1">{{$feature->name}}
                    </h1>
                    <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
                </div>
                <ul class="list-disc list-outside ml-4 text-base font-medium my-5 text-white">
                    @foreach($feature->list as $list)
                    <li>{{$list}}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>