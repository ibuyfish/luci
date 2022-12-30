<div class="colorContainer mb-5">
    @if($value != null)
    @foreach($value as $data)
    <input class="ml-2" type="color" name="{{$name}}" value="{{$data}}">
    @endforeach
    @endif
    @if($value == null)
    <input class="ml-2" type="color" name="{{$name}}" value="{{$value}}">
    @endif
</div>

<a class="addColor cursor-pointer bg-primary py-[11px] px-[21px] rounded-lg mt-3 shadow-lg shadow-primary/30">Add</a>
<a
    class="resetColor cursor-pointer bg-primary py-[11px] px-[21px] rounded-lg mt-3 shadow-lg shadow-primary/30">Reset</a>

@pushonce('c-script')
<script>
    $('.addColor').on('click', function () {
        $('.colorContainer').append(`<input class="ml-2" type="color" name="{{ $name }}" value="">`)
    });
    $('.resetColor').on('click', function () {
        $('.colorContainer').empty();
    });
</script>
@endpushonce