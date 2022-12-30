<div class="p-3">
    <div id="imgArrList" class="grid grid-cols-2">
        @if($value != null)
        @foreach($value as $data)
        <img id="img_arr_prev" src="{{ env('APP_URL').$data->image }}" class="mx-auto h-auto w-full object-cover"
            alt="" />
        <input type="hidden" name="{{ $name }}" value="{{$data->image }}" />
        @endforeach
        @else
        <img id="array_prev_empty" src="{{ asset('assets/images/empty_img.png') }}"
            class="mx-auto h-auto w-full object-cover" alt=".." />
        @endif
    </div>
    <div>
        <button id="array_add" type="button"
            class="array_add text-text mt-3 block w-full rounded-lg bg-primary px-[21px] py-[11px] text-center text-sm font-medium">
            {{ __("dashboard.global.button_upload") }}
        </button>
        <button id="resetArrImage" type="button"
            class="array_add text-text mt-3 block w-full rounded-lg bg-primary px-[21px] py-[11px] text-center text-sm font-medium">
            Reset
        </button>
    </div>
</div>

@pushonce('c-script')
<script>
    $('#resetArrImage').on('click', function () {
        $('#imgArrList').empty();
    });

    var array_add = document.getElementById("array_add");
    array_add.onclick = function () {
        selectFileArrayWithCKFinder("ckfinder-input-array");
    };
    function selectFileArrayWithCKFinder(elementId) {
        CKFinder.modal({
            language: "vi",
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function (finder) {
                finder.on("files:choose", function (evt) {
                    var arr_file = evt.data.files.first();
                    var img_arr = arr_file.getUrl();
                    $('#array_prev_empty').remove();
                    $('#imgArrList').append(`<input type="hidden" name="{{ $name }}" value="${img_arr}" /><img id="img_arr_prev" src="${img_arr}" class="mx-auto h-auto w-full object-cover" alt="" />`);
                });

                finder.on("file:choose:resizedImage", function (evt) {
                    var output = document.getElementById(elementId);
                    output.value = evt.data.resizedUrl;
                });
            },
        });
    }
</script>
@endpushonce