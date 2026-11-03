@extends('layout.mainlayout')

@section('title', 'Katalog Buku')

@section('content')

<section class="border-b border-stone-200 bg-[#f4eee5]">
    <div class="mx-auto max-w-7xl px-6 py-10">
        <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Jelajahi koleksi</p>
        <h1 class="mt-2 font-serif text-4xl font-semibold text-stone-900">Katalog Buku</h1>
        <p class="mt-3 max-w-2xl text-sm leading-6 text-stone-600">Temukan berbagai buku dari penulis kami dalam beragam kategori.</p>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-10">
    <div class="mt-6 grid grid-cols-2 gap-x-5 gap-y-9 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
        @forelse($books as $book)
            <article class="min-w-0">
                <a href="{{ url('/buku/' . data_get($book, 'id')) }}" class="group block">
                    <div class="flex aspect-3/4 items-center justify-center overflow-hidden border border-stone-200 bg-[#e8e0d4] shadow-sm transition group-hover:-translate-y-1 group-hover:shadow-lg">
                        @if(data_get($book, 'cover'))
                            <img src="{{ asset(data_get($book, 'cover')) }}" alt="Sampul {{ data_get($book, 'title') }}" class="h-full w-full object-cover">
                        @else
                            <span class="px-4 text-center font-serif text-sm text-stone-600">{{ data_get($book, 'title') }}</span>
                        @endif
                    </div>
                    <p class="mt-3 text-[10px] font-semibold uppercase tracking-wider text-[#98764f]">{{ data_get($book, 'category') }}</p>
                    <h2 class="mt-1 text-sm font-semibold leading-snug text-stone-900 group-hover:text-[#315b45]">{{ data_get($book, 'title') }}</h2>
                </a>
                <p class="mt-1 text-xs text-stone-500">{{ data_get($book, 'author') }}</p>
                <p class="mt-1 text-xs font-semibold text-stone-800">{{ data_get($book, 'price') }}</p>
            </article>
        @empty
            <div class="col-span-full rounded-xl border border-dashed border-stone-300 py-16 text-center text-sm text-stone-500">Buku tidak ditemukan. Coba kata kunci atau kategori lain.</div>
        @endforelse
    </div>
</section>
@endsection