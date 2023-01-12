<div class="p-3 cursor-pointer {{$id}}">
    <div id="imgList"></div>
    @if($value != "")
    <img src="{{ env('APP_URL').$value }}" class="solution_thumbnail_prev{{$id}} mx-auto h-auto w-full object-cover"
        alt="" />
    @else
    <img src="{{ asset('assets/images/empty_img.png') }}"
        class="solution_thumbnail_prev{{$id}} relative z-10 mx-auto h-auto w-full object-cover" alt=".." />
    @endif
</div>
<input type="hidden" class="imagevl{{$id}}" name="{{ $name }}" value="{{ $value }}" />
@push('c-script')
<script>
    $(`.{{ $id }}`).on('click', function () {
        window["selectFile{{$id}}"](`{{ $id }}`);
    });
    var s = `
    function selectFile{{$id}}(elementId) {
        CKFinder.modal({
            language: "vi",
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function (finder) {
                finder.on("files:choose", function (evt) {
                    var file = evt.data.files.first();
                    var thumbnail = file.getUrl();
                    $(".imagevl{{$id}}").val(thumbnail);
                    $(".solution_thumbnail_prev{{$id}}").attr("src", thumbnail);
                });

                finder.on("file:choose:resizedImage", function (evt) {
                    var output = document.getElementById(elementId);
                    output.value = evt.data.resizedUrl;
                });
            },
        });
    }`;
    eval(s);
</script>
@endpush