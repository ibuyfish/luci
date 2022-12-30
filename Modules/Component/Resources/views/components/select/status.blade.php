<select
    class="text-text text-medium w-1/2 rounded-lg border-[1px] border-border bg-transparent px-[14px] py-[6px] text-base transition placeholder:translate-x-0 placeholder:transition focus-visible:border-[1px] focus-visible:border-primary focus-visible:outline-none focus-visible:transition focus-visible:placeholder:translate-x-2 focus-visible:placeholder:transition"
    name="{{ $name }}"
    id="{{ $name }}"
>
    @if($value === null)
    <option value="1">{{ __('dashboard.global.option_display') }}</option>
    <option value="0">{{ __('dashboard.global.option_hidden') }}</option>
    @else 
    <option value="1" {{$value == '1' ? 'selected' : ""}}>{{ __('dashboard.global.option_display') }}</option>
    <option value="0" {{$value == '0' ? 'selected' : ""}}>{{ __('dashboard.global.option_hidden') }}</option>
    @endif 
</select>