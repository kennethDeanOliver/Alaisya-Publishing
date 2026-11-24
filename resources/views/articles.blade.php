@extends('layout.mainlayout')

@section('title', 'Artikel')

@section('content')
@php
    $articles = $articles ?? [
        [
            'slug' => 'membangun-kebiasaan-membaca',
            'title' => 'Membangun Kebiasaan Membaca di Tengah Kesibukan',
            'category' => 'Literasi',
            'author' => 'Tim Editorial Alaisya Publishing',
            'date' => '12 November 2025',
            'excerpt' => 'Membaca tidak selalu harus dimulai dengan berjam-jam waktu luang. Kebiasaan kecil yang konsisten dapat menjadi awal dari perjalanan literasi.',
            'image' => null,
            'read_time' => '5 menit baca',
            'featured' => true,
        ],
        [
            'slug' => 'mengapa-menulis-penting',
            'title' => 'Mengapa Menulis Tetap Penting di Era Digital?',
            'category' => 'Menulis',
            'author' => 'Tim Editorial Alaisya Publishing',
            'date' => '5 November 2025',
            'excerpt' => 'Menulis membantu kita menyusun pikiran, menyimpan pengalaman, dan menyampaikan gagasan kepada orang lain.',
            'image' => null,
            'read_time' => '4 menit baca',
        ],
        [
            'slug' => 'proses-penerbitan-buku',
            'title' => 'Mengenal Tahapan Proses Penerbitan Buku',
            'category' => 'Penerbitan',
            'author' => 'Tim Editorial Alaisya Publishing',
            'date' => '28 Oktober 2025',
            'excerpt' => 'Dari naskah awal hingga buku siap dibaca, ada beberapa tahap penting yang menjaga kualitas sebuah terbitan.',
            'image' => null,
            'read_time' => '6 menit baca',
        ],
        [
            'slug' => 'memilih-buku-untuk-dibaca',
            'title' => 'Cara Memilih Buku yang Sesuai dengan Minat Anda',
            'category' => 'Rekomendasi',
            'author' => 'Tim Editorial Alaisya Publishing',
            'date' => '20 Oktober 2025',
            'excerpt' => 'Kenali minat, tujuan membaca, dan jenis bacaan yang dapat menemani proses belajar maupun waktu senggang.',
            'image' => null,
            'read_time' => '3 menit baca',
        ],
    ];

    $featuredArticle = collect($articles)->firstWhere('featured', true) ?? ($articles[0] ?? null);
    $otherArticles = collect($articles)->reject(function ($article) use ($featuredArticle) {
        return $featuredArticle && data_get($article, 'slug') === data_get($featuredArticle, 'slug');
    });
@endphp

{{-- Page introduction --}}
<section class="border-b border-stone-200 bg-[#f4eee5]">
    <div class="mx-auto max-w-7xl px-6 py-12 md:py-16">
        <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Cerita, wawasan, dan inspirasi</p>
        <h1 class="mt-3 font-serif text-4xl font-semibold leading-tight text-stone-900 md:text-5xl">Artikel Alaisya Publishing</h1>
        <p class="mt-5 max-w-2xl text-sm leading-7 text-stone-600">
            Temukan berbagai bacaan seputar dunia literasi, penulisan, penerbitan, dan gagasan menarik lainnya.
        </p>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-12 md:py-16">
    @if($featuredArticle)
        <div class="mb-14">
            <div class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Pilihan editor</p>
                    <h2 class="mt-2 font-serif text-2xl font-semibold text-stone-900">Artikel Utama</h2>
                </div>
            </div>

            <article class="grid overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm md:grid-cols-2">
                <a href="{{ url('/articles/' . data_get($featuredArticle, 'slug')) }}" class="relative block min-h-62.5 overflow-hidden bg-linear-to-br from-[#e5d7c3] via-[#d6c3a7] to-[#9d8768] md:min-h-90">
                    @if(data_get($featuredArticle, 'image'))
                        <img src="{{ asset(data_get($featuredArticle, 'image')) }}" alt="{{ data_get($featuredArticle, 'title') }}" class="absolute inset-0 h-full w-full object-cover">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center p-8">
                            <div class="max-w-xs border border-white/70 bg-[#f4eee5]/80 p-8 text-center shadow-xl backdrop-blur-sm">
                                <span class="text-[10px] font-semibold uppercase tracking-[.25em] text-[#98764f]">Alaisya Publishing</span>
                                <p class="mt-4 font-serif text-2xl leading-snug text-stone-800">{{ data_get($featuredArticle, 'category') }}</p>
                                <div class="mx-auto mt-5 h-px w-12 bg-[#98764f]"></div>
                                <p class="mt-4 text-xs text-stone-600">Ruang untuk gagasan dan cerita</p>
                            </div>
                        </div>
                    @endif
                </a>
                <div class="flex flex-col justify-center p-7 md:p-10">
                    <div class="flex flex-wrap items-center gap-3 text-[11px] font-semibold uppercase tracking-wider text-[#98764f]">
                        <span>{{ data_get($featuredArticle, 'category') }}</span>
                        <span class="h-1 w-1 rounded-full bg-stone-300"></span>
                        <time>{{ data_get($featuredArticle, 'date') }}</time>
                    </div>
                    <h3 class="mt-4 font-serif text-3xl font-semibold leading-tight text-stone-900 md:text-4xl">
                        <a href="{{ url('/articles/' . data_get($featuredArticle, 'slug')) }}" class="hover:text-[#315b45]">{{ data_get($featuredArticle, 'title') }}</a>
                    </h3>
                    <p class="mt-5 text-sm leading-7 text-stone-600">{{ data_get($featuredArticle, 'excerpt') }}</p>
                    <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-stone-100 pt-5">
                        <span class="text-xs text-stone-500">Oleh {{ data_get($featuredArticle, 'author') }}</span>
                        <a href="{{ url('/articles/' . data_get($featuredArticle, 'slug')) }}" class="text-sm font-semibold text-[#315b45] hover:text-[#98764f]">Baca Artikel →</a>
                    </div>
                </div>
            </article>
        </div>
    @endif

    {{-- Article list --}}
    <div class="mb-7 flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Jelajahi bacaan</p>
            <h2 class="mt-2 font-serif text-3xl font-semibold text-stone-900">Artikel Terbaru</h2>
        </div>
        <span class="text-sm text-stone-500">{{ $otherArticles->count() }} artikel lainnya</span>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($otherArticles as $article)
            <article class="group overflow-hidden rounded-xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <a href="{{ url('/articles/' . data_get($article, 'slug')) }}" class="relative block h-48 overflow-hidden bg-linear-to-br from-[#e8dfd2] to-[#c8b493]">
                    @if(data_get($article, 'image'))
                        <img src="{{ asset(data_get($article, 'image')) }}" alt="{{ data_get($article, 'title') }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                    @else
                        <div class="flex h-full items-center justify-center p-6">
                            <div class="flex h-32 w-24 items-center justify-center border border-white/70 bg-[#f4eee5]/80 p-3 text-center shadow-lg">
                                <span class="font-serif text-sm text-stone-700">{{ data_get($article, 'category') }}</span>
                            </div>
                        </div>
                    @endif
                </a>
                <div class="p-6">
                    <div class="flex flex-wrap items-center gap-2 text-[10px] font-semibold uppercase tracking-wider text-[#98764f]">
                        <span>{{ data_get($article, 'category') }}</span>
                        <span class="h-1 w-1 rounded-full bg-stone-300"></span>
                        <time>{{ data_get($article, 'date') }}</time>
                    </div>
                    <h3 class="mt-3 font-serif text-xl font-semibold leading-snug text-stone-900">
                        <a href="{{ url('/articles/' . data_get($article, 'slug')) }}" class="transition group-hover:text-[#315b45]">{{ data_get($article, 'title') }}</a>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-stone-500">{{ data_get($article, 'excerpt') }}</p>
                    <div class="mt-5 flex items-center justify-between border-t border-stone-100 pt-4">
                        <span class="text-[11px] text-stone-400">{{ data_get($article, 'read_time') }}</span>
                        <a href="{{ url('/articles/' . data_get($article, 'slug')) }}" class="text-xs font-semibold text-[#315b45] hover:text-[#98764f]">Baca Selengkapnya →</a>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full rounded-xl border border-dashed border-stone-300 py-16 text-center text-sm text-stone-500">
                Belum ada artikel lain untuk ditampilkan.
            </div>
        @endforelse
    </div>

    {{-- Static pagination styling for the assignment mockup --}}
    <div class="mt-10 flex items-center justify-center gap-2">
        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#19372c] text-xs font-semibold text-white">1</span>
        <span class="flex h-9 w-9 items-center justify-center rounded-lg border border-stone-300 bg-white text-xs text-stone-400">2</span>
        <span class="flex h-9 w-9 items-center justify-center rounded-lg border border-stone-300 bg-white text-xs text-stone-400">3</span>
        <span class="px-2 text-stone-400">...</span>
        <span class="flex h-9 w-9 items-center justify-center rounded-lg border border-stone-300 bg-white text-xs text-stone-400">→</span>
    </div>
</section>
@endsection
