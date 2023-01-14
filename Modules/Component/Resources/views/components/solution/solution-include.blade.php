<div class="bg-white border-home_primary rounded-xl shadow-lg flex gap-[22px] px-[37px] py-[19px]">
    <x-component::input.ckfinder-solution name="include_body[{{$name}}][image]"
        value="{{isset($value) ? $value->image : ''}}" id="{{$id}}" />
    <div>
        <h1 class="text-black font-semibold text-[20px]">
            <input type="text" name="include_body[{{$name}}][name]" value="{{isset($value) ? $value->name : ''}}"
                placeholder="Some Text" class="bg-white text-center block placeholder:text-black w-full">
        </h1>
        <p class="text-sm text-black mt-2">
            <input type="text" name="include_body[{{$name}}][subname]" value="{{isset($value) ? $value->subname : ''}}"
                placeholder="Some Text" class="bg-white text-center block placeholder:text-black w-full">
        </p>
    </div>
</div>