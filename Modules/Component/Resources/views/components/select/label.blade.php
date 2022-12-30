<select
    class="text-text text-medium w-1/2 rounded-lg border-[1px] border-border bg-transparent px-[14px] py-[6px] text-base transition placeholder:translate-x-0 placeholder:transition focus-visible:border-[1px] focus-visible:border-primary focus-visible:outline-none focus-visible:transition focus-visible:placeholder:translate-x-2 focus-visible:placeholder:transition"
    name="{{ $name }}" id="{{ $name }}">
    @if($value === null)
    <option value="hot">{{ __('dashboard.global.label_hot') }}</option>
    <option value="normal" selected>{{ __('dashboard.global.label_normal') }}</option>
    <option value="new">{{ __('dashboard.global.label_new') }}</option>
    @else
    <option value="new" {{$value=='new' ? 'selected' : "" }}>{{ __('dashboard.global.label_new') }}</option>
    <option value="hot" {{$value=='hot' ? 'selected' : "" }}>{{ __('dashboard.global.label_hot') }}</option>
    <option value="normal" {{$value=='normal' ? 'selected' : "" }}>{{ __('dashboard.global.label_normal') }}</option>
    @endif
</select>