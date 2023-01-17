@php
$include = json_decode($model->translations[0]->include);
@endphp
<section class="px-[15px] lg:px-0">
    <div class="container py-[90px]">
        <h1 class="text-[32px] lg:text-[40px] font-bold uppercase text-black text-center">Luzi bao gồm những gì?
        </h1>
        <p class="text-[20px] text-black text-center lg:px-[20%] mt-6">
            Tổng thể giải pháp quản lý đô thị thông minh Luzi ra mắt và phát triển gồm 4 phân hệ, mỗi hệ thống là một
            sản phẩm ứng với từng nhu cầu sử dụng riêng biệt.
        </p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[34px] mt-[50px]">
            @foreach($include->array as $include)
            <div class="bg-white border-home_primary rounded-xl shadow-lg flex gap-[22px] px-[37px] py-[19px]">
                <img class="w-[63px] h-[63px]" src="{{env('APP_URK').$include->image}}" alt="">
                <div>
                    <h1 class="text-black font-semibold text-[20px]">{{$include->name}}</h1>
                    <p class="text-sm text-black mt-2">
                        {{$include->subname}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>