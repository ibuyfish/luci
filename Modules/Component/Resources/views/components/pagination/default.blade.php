<div class="flex mt-5">

        @if ($paginator->onFirstPage())
        <a class="flex w-7 h-7 mr-1 rounded-full bg-background items-center justify-center"><i class="fa-solid fa-angle-left"></i></a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="flex w-7 h-7 mr-1 rounded-full bg-background items-center justify-center"><i class="fa-solid fa-angle-left"></i></a>
        @endif
        <div class="bg-background flex rounded-full">
        @foreach ($elements as $element)

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <a class="flex w-7 h-7 rounded-full bg-primary items-center justify-center"">{{ $page }}</a>
        @else
        <a href="{{ $url }}" class="flex w-7 h-7 rounded-full  items-center justify-center"">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach
        </div>

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="ml-1 flex w-7 h-7 mr-1 rounded-full bg-background items-center justify-center"><i class="fa-solid fa-angle-right"></i></a>
        @else
        <a class="flex w-7 h-7 mr-1 rounded-full ml-1 bg-background items-center justify-center"><i class="fa-solid fa-angle-right"></i></a>
        @endif
</div>