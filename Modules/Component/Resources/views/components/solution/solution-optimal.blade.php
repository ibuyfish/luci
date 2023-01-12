<div class="grid grid-cols-1 lg:grid-cols-2 gap-[135px] items-center mt-[90px]">
    <x-component::input.ckfinder-solution name="optimal_body[{{$name}}][image]" value="" id="{{$id}}" />
    <div class="{{isset($order) ? 'order-last lg:order-first' : ''}}">
        <h1 class="uppercase text-black text-[36px] font-bold">
            <input type="text" name="optimal_body[{{$name}}][name]" placeholder="Some Text"
                class="bg-home_light_blue placeholder:text-black w-full">
        </h1>
        <ul class="list-disc mr-3 text-[20px] text-[#545454] mt-8">

        </ul>
        <div class="add_li{{$name}} text-center cursor-pointer">Add</div>
        <a class="bg-home_primary inline-block px-[32px] py-[18px] shadow-lg rounded-lg mt-[46px]">
            <div class="flex items-center">
                <span class="text-[24px] font-semibold text-white">
                    <input type="text" name="optimal_body[{{$name}}][button]" placeholder="Some Text"
                        class="bg-home_primary placeholder:text-white w-full">
                </span>
                <img class="pl-2 object-cover aspect-video" src="{{asset('assets/images/icon/arrow_right.png')}}"
                    alt="">
            </div>
        </a>
    </div>
</div>

@push('c-script')
<script>
    $('.add_li{{$name}}').on('click', function () {
        $(this).prev().append(`<li><input type="text" name="optimal_body[{{$name}}][list][]" placeholder="Some Text"
                                                class="w-full bg-home_primary placeholder:text-white"></li>`);
    })
</script>
@endpush