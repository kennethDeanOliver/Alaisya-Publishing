@php
    $bookTitle = data_get($book, 'title', 'Judul Buku');
    $bookAuthor = data_get($book, 'author', 'Nama Penulis');
    $bookPrice = data_get($book, 'price', 'Hubungi kami');
    $bookCover = data_get($book, 'cover');
    $bookUrl = data_get($book, 'url', '#');
@endphp

<article class="min-w-0">
    <a href="{{ $bookUrl }}" class="group block">
        <div class="flex aspect-3/4 items-center justify-center overflow-hidden rounded-sm border border-stone-200 bg-[#e8e0d4] shadow-sm transition group-hover:-translate-y-1 group-hover:shadow-lg">
            @if($bookCover)
                <img src="{{ asset($bookCover) }}" alt="Sampul {{ $bookTitle }}" class="h-full w-full object-cover" onerror="this.style.display='none';">
            @else
                <span class="px-3 text-center font-serif text-sm text-stone-600">{{ $bookTitle }}</span>
            @endif
        </div>
        <h3 class="mt-3 text-sm font-semibold leading-snug text-stone-900 group-hover:text-[#315b45]">{{ $bookTitle }}</h3>
    </a>
    <p class="mt-1 text-xs text-stone-500">{{ $bookAuthor }}</p>
    <p class="mt-1 text-xs font-semibold text-stone-800">{{ $bookPrice }}</p>
</article>