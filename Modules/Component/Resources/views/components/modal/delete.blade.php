<div class="deleteModal fixed top-0 z-10 hidden h-full w-full items-center justify-center bg-[#00000066]">
    <div class="w-1/2 rounded-lg bg-background p-5">
        <div class="mx-auto flex items-center justify-center text-[100px] text-red-400">
            <i class="fa-regular fa-circle-xmark"></i>
        </div>
        <h1 class="mt-2 text-center text-lg">Are you sure ?</h1>
        <p class="mt-3 text-center text-sm">
            Are you sure you want to delete this record ? This can`t be undone.
        </p>
        <div class="mt-5 grid grid-cols-2 gap-10">
            <div>
                <a onclick="closeDeleteModal()"
                    class="text-text block w-full cursor-pointer rounded-lg bg-primary px-[21px] py-[11px] text-center text-sm font-medium shadow-lg">
                    Goback
                </a>
            </div>
            <div>
                <form action="{{ $url }}" method="POST">
                    @csrf
                    <input type="hidden" value="" name="id" />
                    <button type="submit"
                        class="text-text block w-full rounded-lg bg-red-400 px-[21px] py-[11px] text-center text-sm font-medium shadow-lg">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@pushonce('c-script')
<script>
    const openDeleteModal = ($id) => {
        $(".deleteModal").removeClass("hidden").addClass("flex");
        $('input[name="id"]').val($id);
    };
    const closeDeleteModal = () => {
        $(".deleteModal").removeClass("flex").addClass("hidden");
    };
</script>
@endpushonce