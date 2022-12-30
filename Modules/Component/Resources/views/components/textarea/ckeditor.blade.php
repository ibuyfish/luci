<textarea name="{{ $name }}" id="ckeditor" rows="10" cols="80">
    {!! $value !!}
</textarea>
@pushonce('c-script')
<script>
    var editor = CKEDITOR.replace("ckeditor");
    CKFinder.setupCKEditor(editor);
</script>
@endpushonce
