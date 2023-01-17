<select
    class="text-text text-medium w-1/2 rounded-lg border-[1px] border-border bg-transparent px-[14px] py-[6px] text-base transition placeholder:translate-x-0 placeholder:transition focus-visible:border-[1px] focus-visible:border-primary focus-visible:outline-none focus-visible:transition focus-visible:placeholder:translate-x-2 focus-visible:placeholder:transition"
    name="{{ $name }}" id="{{ $name }}">
    @if($value == null)
    <option value="" selected>{{$placeholder}}</option>
    @else
    <option value="{{$value->id}}" selected>{{translate($value,'name')}}</option>
    @endif @foreach($datas as $data)
    <option value="{{$data->id}}">{{translate($data,'name')}}</option>
    @endforeach
</select>