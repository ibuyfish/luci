<input type="{{ $type }}" name="{{ $name }}"
{{ isset($required) ? $required : "" }}
placeholder="john@example.com" value="{{ isset($value) ? $value : "" }}"
class="text-text text-medium w-full rounded-lg border-[1px] border-border
bg-transparent px-[14px] py-[6px] text-base transition placeholder:translate-x-0
placeholder:transition focus-visible:border-[1px] focus-visible:border-primary
focus-visible:outline-none focus-visible:transition
focus-visible:placeholder:translate-x-2 focus-visible:placeholder:transition "
/>
