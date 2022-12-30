<div class="sizeContainer mb-5">
    @if($value != null)
    @foreach($value as $data)
    <input class="text-text text-medium rounded-lg border-[1px] border-border
        bg-transparent px-[14px] py-[6px] text-base focus-visible:outline-none w-20" type="text" name="{{$name}}"
        value="{{$data}}">
    @endforeach
    @endif
    @if($value == null)
    <input class="text-text text-medium rounded-lg border-[1px] border-border
    bg-transparent px-[14px] py-[6px] text-base focus-visible:outline-none w-20" type="text" name="{{$name}}"
        value="S">
    @endif
</div>

<a class="addSize cursor-pointer bg-primary py-[11px] px-[21px] rounded-lg mt-3 shadow-lg shadow-primary/30">Add</a>
<a class="resetSize cursor-pointer bg-primary py-[11px] px-[21px] rounded-lg mt-3 shadow-lg shadow-primary/30">Reset</a>

@pushonce('c-script')
<script>
    $('.addSize').on('click', function () {
        $('.sizeContainer').append(` <input class="text-text text-medium rounded-lg border-[1px] border-border
    bg-transparent px-[14px] py-[6px] text-base focus-visible:outline-none w-20" type="text" name="{{$name}}" value="">`)
    });
    $('.resetSize').on('click', function () {
        $('.sizeContainer').empty();
    });
</script>
@endpushonce