<div class="px-[14px] py-[19px] bg-home_primary overflow-hidden rounded-xl relative">
    <img class="absolute bottom-2 right-2 w-[150px] h-[188px] opacity-10"
        src="{{asset('assets/images/icon/join_icon.png')}}" alt="">
    <x-component::input.ckfinder-solution name="feature_body[{{$name}}][image]"
        value="{{isset($value) ? $value->image : ''}}" id="{{$id}}" />
    <div class="flex bg-white mt-5 rounded-lg items-center px-2 py-1">
        <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
        <h1 class="text-black text-[20px] font-semibold uppercase text-center flex-1">
            <input type="text" name="feature_body[{{$name}}][name]" value="{{isset($value) ? $value->name : ''}}"
                placeholder="Some Text" class="bg-home_light_blue placeholder:text-black w-full">
        </h1>
        <img class="h-[12px] w-[12px]" src="{{asset('assets/images/icon/green_hexagon.png')}}" alt="">
    </div>
    <ul class="list-disc list-outside ml-4 text-base font-medium my-5 text-white">
        @if(isset($value->list))
        @foreach($value->list as $list)
        <li><input type="text" name="feature_body[{{$name}}][list][]" value="{{isset($value) ? $list : ''}}"
                placeholder="Some Text" class="w-full bg-home_primary placeholder:text-white"></li>
        @endforeach
        @endif
    </ul>
    <div class="add_li{{$name}} relative z-10 text-center cursor-pointer">Add</div>
</div>

@push('c-script')
<script>
    $('.add_li{{$name}}').on('click', function () {
        $(this).prev().append(`<li><input type="text" name="feature_body[{{$name}}][list][]" placeholder="Some Text"
                                                class="w-full bg-home_primary placeholder:text-white"></li>`);
    })
</script>
@endpush