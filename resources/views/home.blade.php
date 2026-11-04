@extends('layout.mainlayout')

@section('title', 'Beranda')

@section('content')

<section class="relative isolate overflow-hidden bg-[#f4eee5]">
    <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-14 md:grid-cols-2 md:py-20">
        <div class="relative z-10">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[.22em] text-[#92734f]">Alaisya Publishing · Menerbitkan Gagasan</p>
            <h1 class="max-w-xl font-serif text-4xl font-semibold leading-[1.08] text-[#171a17] sm:text-5xl lg:text-6xl">
                Setiap Gagasan Layak Menemukan Pembacanya.
            </h1>
            <p class="mt-6 max-w-lg text-base leading-7 text-stone-600">
                Kami adalah penerbit buku yang mendampingi penulis dari naskah hingga karya yang siap dibaca, tersebar luas, dan memberi manfaat.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <div class="cursor-not-allowed inline-block">
                    <a href="{{ url('/terbitkan-buku') }}" aria-disabled="true" tabindex="-1" class="pointer-events-none select-none inline-flex items-center gap-3 rounded-lg bg-[#19372c] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#10291f]">
                        Terbitkan Buku Anda <span aria-hidden="true">→</span>
                    </a>
                </div>
                <a href="{{ url('/catalog') }}" class="rounded-lg border border-stone-400 px-6 py-3.5 text-sm font-semibold text-stone-800 transition hover:bg-white">
                    Jelajahi Katalog
                </a>
            </div>
            <div class="mt-12 grid max-w-xl grid-cols-3 gap-4 border-t border-stone-300 pt-6">
                @foreach([
                    ['Proses Profesional', 'Didampingi tim editor berpengalaman.'],
                    ['ISBN Resmi', 'Sesuai ketentuan nasional.'],
                    ['Cetak & Digital', 'Pilihan terbit cetak dan e-book.'],
                ] as $feature)
                    <div>
                        <div class="mb-2 text-xl text-[#94734d]">◎</div>
                        <h2 class="text-xs font-bold text-stone-800 sm:text-sm">{{ $feature[0] }}</h2>
                        <p class="mt-1 text-[11px] leading-4 text-stone-500 sm:text-xs">{{ $feature[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="relative min-h-85 md:min-h-122.5">
            <img src="{{ asset('images/logo.jpg') }}" alt="Alaisya Publishing" class="absolute inset-0 h-full w-full rounded-2xl object-cover shadow-xl" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-14 md:py-16">
    <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Pilihan editor</p>
            <h2 class="mt-2 font-serif text-3xl font-semibold text-stone-900">Buku Pilihan Kami</h2>
            <p class="mt-2 text-sm text-stone-500">Karya-karya terbaru dan rekomendasi dari editor kami.</p>
        </div>
        <a href="{{ url('/catalog') }}" class="text-sm font-semibold text-[#244536] hover:underline">Lihat Semua Buku →</a>
    </div>

    <div class="grid gap-8 lg:grid-cols-[minmax(0,3fr)_minmax(230px,1fr)]">
        <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 xl:grid-cols-6">
            @foreach($books as $book)
                @include('partials.book-card', ['book' => $book])
            @endforeach
        </div>
        <aside class="flex flex-col justify-between rounded-2xl bg-[#19372c] p-7 text-white">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#d8c19e]">Punya naskah?</p>
                <h3 class="mt-4 font-serif text-3xl leading-tight">Kami Siap Membantu Mewujudkannya Menjadi Buku.</h3>
                <p class="mt-4 text-sm leading-6 text-white/75">Mulai dari konsultasi, editing, desain, hingga penerbitan.</p>
            </div>
            <div class="cursor-not-allowed inline-block">
                <a href="{{ url('/terbitkan-buku') }}" aria-disabled="true" tabindex="-1" class="pointer-events-none select-none mt-8 inline-flex items-center justify-center gap-2 rounded-lg bg-[#f7f2e9] px-4 py-3 text-sm font-semibold text-[#19372c] hover:bg-white">Konsultasi Sekarang →</a>
            </div>
        </aside>
    </div>
</section>

<section class="bg-[#eee9e1] py-12">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="font-serif text-3xl font-semibold text-stone-900">Mengapa Memilih Alaisya Publishing?</h2>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach([
                ['Berpengalaman', 'Dalam dunia penerbitan.'],
                ['Tim Profesional', 'Editor, desainer, dan reviewer ahli.'],
                ['Layanan Lengkap', 'Dari naskah hingga distribusi.'],
                ['Karya Berkualitas', 'Dan ber-ISBN resmi.'],
            ] as $item)
                <div class="flex gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#b69a73] text-lg text-[#8a6a43]">✳</span>
                    <div><h3 class="text-sm font-bold text-stone-800">{{ $item[0] }}</h3><p class="mt-1 text-xs text-stone-500">{{ $item[1] }}</p></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection