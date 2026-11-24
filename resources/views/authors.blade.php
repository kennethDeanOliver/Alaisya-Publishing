@extends('layout.mainlayout')

@section('title', 'Penulis')

@section('content')
@php
    $authors = $authors ?? [
        [
            'name' => 'Dr. Sinta Rahma',
            'field' => 'Pendidikan & Pengembangan Pembelajaran',
            'bio' => 'Menulis tentang pendidikan, pembelajaran, dan cara membangun lingkungan belajar yang lebih baik.',
            'books' => 3,
            'initials' => 'SR',
            'image' => null,
        ],
        [
            'name' => 'Budi Santoso',
            'field' => 'Sejarah & Kebudayaan',
            'bio' => 'Mengangkat kisah, sejarah, dan kekayaan budaya Nusantara melalui tulisan yang mudah dipahami.',
            'books' => 2,
            'initials' => 'BS',
            'image' => null,
        ],
        [
            'name' => 'A. Pratama',
            'field' => 'Psikologi & Pengembangan Diri',
            'bio' => 'Mengeksplorasi hubungan manusia dengan dirinya sendiri, orang lain, dan makna kehidupan.',
            'books' => 2,
            'initials' => 'AP',
            'image' => null,
        ],
        [
            'name' => 'Rina Lestari',
            'field' => 'Ekonomi & Bisnis',
            'bio' => 'Menyajikan topik ekonomi dan keuangan dengan pendekatan yang dekat dengan kehidupan sehari-hari.',
            'books' => 2,
            'initials' => 'RL',
            'image' => null,
        ],
        [
            'name' => 'Dewi Anggraini',
            'field' => 'Kesehatan Mental & Gaya Hidup',
            'bio' => 'Menulis tentang keseimbangan hidup, kesehatan mental, dan kebiasaan yang mendukung kesejahteraan.',
            'books' => 1,
            'initials' => 'DA',
            'image' => null,
        ],
        [
            'name' => 'Andi Kurniawan',
            'field' => 'Pengembangan Diri & Produktivitas',
            'bio' => 'Membahas kesederhanaan, produktivitas, dan langkah-langkah kecil untuk hidup lebih terarah.',
            'books' => 1,
            'initials' => 'AK',
            'image' => null,
        ],
    ];
@endphp

{{-- Page introduction --}}
<section class="border-b border-stone-200 bg-[#f4eee5]">
    <div class="mx-auto max-w-7xl px-6 py-12 md:py-16">
        <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Orang-orang di balik setiap karya</p>
        <h1 class="mt-3 font-serif text-4xl font-semibold leading-tight text-stone-900 md:text-5xl">Kenali Para Penulis Kami</h1>
        <p class="mt-5 max-w-2xl text-sm leading-7 text-stone-600">
            Setiap penulis membawa pengalaman, sudut pandang, dan gagasan yang berbeda. Temukan sosok di balik buku-buku Alaisya Publishing.
        </p>
    </div>
</section>

{{-- Author directory --}}
<section class="mx-auto max-w-7xl px-6 py-12 md:py-16">
    <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Komunitas Alaisya Publishing</p>
            <h2 class="mt-2 font-serif text-3xl font-semibold text-stone-900">Penulis Alaisya Publishing</h2>
        </div>
        <p class="text-sm text-stone-500">{{ count($authors) }} penulis ditampilkan</p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($authors as $author)
            <article class="group overflow-hidden rounded-xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-5 p-6">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-full border border-[#d8c5a8] bg-[#eee7dc]">
                        @if(data_get($author, 'image'))
                            <img src="{{ asset(data_get($author, 'image')) }}" alt="Foto {{ data_get($author, 'name') }}" class="h-full w-full object-cover">
                        @else
                            <span class="font-serif text-2xl text-[#856744]">{{ data_get($author, 'initials', 'LN') }}</span>
                        @endif
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-serif text-xl font-semibold text-stone-900">{{ data_get($author, 'name') }}</h3>
                        <p class="mt-1 text-xs font-medium leading-5 text-[#8b6c45]">{{ data_get($author, 'field') }}</p>
                    </div>
                </div>
                <div class="border-t border-stone-100 px-6 py-5">
                    <p class="min-h-18 text-sm leading-6 text-stone-600">{{ data_get($author, 'bio') }}</p>
                    <div class="mt-5 flex items-center justify-between border-t border-stone-100 pt-4">
                        <span class="text-xs text-stone-500">{{ data_get($author, 'books', 0) }} buku diterbitkan</span>
                        <a href="{{ url('/catalog') }}" class="text-xs font-semibold text-[#315b45] transition group-hover:text-[#98764f]">Jelajahi Buku →</a>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full rounded-xl border border-dashed border-stone-300 py-16 text-center text-sm text-stone-500">
                Informasi penulis belum tersedia.
            </div>
        @endforelse
    </div>
</section>

{{-- Author submission callout --}}
<section class="bg-[#eee9e1]">
    <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-12 md:flex-row md:items-center md:justify-between">
        <div class="max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Bergabung bersama kami</p>
            <h2 class="mt-2 font-serif text-2xl font-semibold text-stone-900 md:text-3xl">Punya gagasan yang ingin dibagikan?</h2>
            <p class="mt-3 text-sm leading-6 text-stone-600">Mulailah perjalanan menerbitkan karya Anda bersama Literanusa.</p>
        </div>
        <a href="{{ url('/publishing') }}" class="inline-flex shrink-0 items-center justify-center rounded-lg bg-[#19372c] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#10291f]">
            Kirim Naskah Anda →
        </a>
    </div>
</section>
@endsection
