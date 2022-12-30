<div class="p-3">
    <div id="imgList"></div>
    @if($value != "")
    <img id="thumbnail_prev" src="{{ env('APP_URL').$value }}" class="mx-auto h-auto w-full object-cover" alt="" />
    @else
    <img id="thumbnail_prev" src="{{ asset('assets/images/empty_img.png') }}" class="mx-auto h-auto w-full object-cover"
        alt=".." />
    @endif
    <button id="ckfinder-popup-single" type="button"
        class="text-text mt-3 block w-full rounded-lg bg-primary px-[21px] py-[11px] text-center text-sm font-medium">
        {{ __("dashboard.global.button_upload") }}
    </button>
</div>
<input type="hidden" name="{{ $name }}" value="{{ $value }}" />
@pushonce('c-script')
<script>
    var button1 = document.getElementById("ckfinder-popup-single");

    button1.onclick = function () {
        selectFileWithCKFinder("ckfinder-input-single");
    };

    function selectFileWithCKFinder(elementId) {
        CKFinder.modal({
            language: "vi",
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function (finder) {
                finder.on("files:choose", function (evt) {
                    var file = evt.data.files.first();
                    var thumbnail = file.getUrl();
                    $('input[name="{{ $name }}"]').val(thumbnail);
                    $("#thumbnail_prev").attr("src", thumbnail);
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