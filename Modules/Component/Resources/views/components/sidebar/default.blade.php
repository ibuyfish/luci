<div class="h-screen w-[260px] hidden lg:block lg:fixed bg-secondary shadow-lg">
    <div class="p-4">
        <img class="mx-auto w-[80px] py-5"
            src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-1/images/logo/logo.svg" alt="" />
        <div>
            <a href="{{ route('admin.dashboard.show') }}"
                class="flex items-center py-[10px] px-[15px] transition duration-300 hover:translate-x-2">
                <i class="fa-regular fa-circle text-text text-[10px]"></i>
                <p class="ml-4 text-base font-medium">Dashboard</p>
            </a>
        </div>
        <h1 class="px-[10px] pt-8 pb-2 text-sm font-semibold uppercase text-g_divider">
            Theme
        </h1>
        <x-component::collapse.sidebar-text icon="fa-solid fa-house" url="theme_category" title="Category">
            <x-component::button.sidebar-href href="{{ route('admin.theme_category.list') }}" title="List"
                url="theme_category/list" />
            <x-component::button.sidebar-href href="{{ route('admin.theme_category.create') }}" title="Create"
                url="theme_category/create" />
        </x-component::collapse.sidebar-text>
        <x-component::collapse.sidebar-text icon="fa-solid fa-house" url="theme_product" title="Product">
            <x-component::button.sidebar-href href="{{ route('admin.theme_product.list') }}" title="List"
                url="theme_product/list" />
            <x-component::button.sidebar-href href="{{ route('admin.theme_product.create') }}" title="Create"
                url="theme_product/create" />
        </x-component::collapse.sidebar-text>
        <x-component::collapse.sidebar-text icon="fa-solid fa-house" url="theme_blog" title="Blog">
            <x-component::button.sidebar-href href="{{ route('admin.theme_blog.list') }}" title="List"
                url="theme_blog/list" />
            <x-component::button.sidebar-href href="{{ route('admin.theme_blog.create') }}" title="Create"
                url="theme_blog/create" />
        </x-component::collapse.sidebar-text>
    </div>
</div>
<div class="w-[260px] hidden lg:block">
</div>

<div class="headerMobile hidden lg:hidden fixed z-10 min-h-full w-screen shadow-lg">
    <div class="flex lg:hidden fixed z-10 min-h-full w-screen shadow-lg">
        <div class="w-[260px] bg-secondary z-10">
            <div class="p-4">
                <img class="mx-auto w-[80px] py-5"
                    src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-1/images/logo/logo.svg"
                    alt="" />
                <div>
                    <a href="{{ route('admin.dashboard.show') }}"
                        class="flex items-center py-[10px] px-[15px] transition duration-300 hover:translate-x-2">
                        <i class="fa-regular fa-circle text-text text-[10px]"></i>
                        <p class="ml-4 text-base font-medium">Dashboard</p>
                    </a>
                </div>
                <h1 class="px-[10px] pt-8 pb-2 text-sm font-semibold uppercase text-g_divider">
                    Theme
                </h1>
                <x-component::collapse.sidebar-text icon="fa-solid fa-house" url="theme_category" title="Category">
                    <x-component::button.sidebar-href href="{{ route('admin.theme_category.list') }}" title="List"
                        url="theme_category/list" />
                    <x-component::button.sidebar-href href="{{ route('admin.theme_category.create') }}" title="Create"
                        url="theme_category/create" />
                </x-component::collapse.sidebar-text>
                <x-component::collapse.sidebar-text icon="fa-solid fa-house" url="theme_product" title="Category">
                    <x-component::button.sidebar-href href="{{ route('admin.theme_product.list') }}" title="List"
                        url="theme_product/list" />
                    <x-component::button.sidebar-href href="{{ route('admin.theme_product.create') }}" title="Create"
                        url="theme_product/create" />
                </x-component::collapse.sidebar-text>
            </div>
        </div>
        <div id="closeToggle" class="flex-1 "></div>
    </div>
</div>


@pushonce('c-script')
<script>
    $('#togg').on('click', function () {
        $('.headerMobile').toggle('fast');
    });
    $('#closeToggle').on('click', function () {
        $('.headerMobile').toggle('fast');
    })
</script>
@endpushonce