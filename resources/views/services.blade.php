@extends('layout.mainlayout')

@section('title', 'Layanan')

@section('content')
<section class="relative overflow-hidden bg-[#f4eee5]">
    <div class="mx-auto grid max-w-7xl items-center gap-8 px-6 py-12 md:grid-cols-[1fr_.8fr]">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Dari naskah menjadi karya</p>
            <h1 class="mt-3 max-w-xl font-serif text-4xl font-semibold leading-tight text-stone-900 md:text-5xl">Layanan Penerbitan</h1>
            <p class="mt-5 max-w-xl text-sm leading-7 text-stone-600">Kami menyediakan layanan lengkap untuk membantu naskah Anda menjadi buku yang berkualitas dan siap diterbitkan.</p>
        </div>
        <div class="h-56 overflow-hidden rounded-xl bg-[#d8c7ae] md:h-72">
            <img src="{{ asset('images/publishing-services.jpg') }}" alt="Proses penyuntingan naskah" class="h-full w-full object-cover" onerror="this.style.display='none';">
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-14">
    @php
        $services = [
            ['01', 'Konsultasi Naskah', 'Diskusi awal untuk menentukan arah penerbitan buku Anda.', '◎'],
            ['02', 'Editing & Proofreading', 'Penyuntingan bahasa, struktur, dan isi naskah.', '✎'],
            ['03', 'Desain Sampul', 'Desain sampul profesional yang menarik dan sesuai karakter buku.', '▧'],
            ['04', 'Tata Letak Buku', 'Penataan isi buku agar nyaman dibaca.', '▤'],
            ['05', 'Pengurusan ISBN', 'Pengurusan ISBN sesuai ketentuan nasional.', '⌑'],
            ['06', 'Cetak & Penerbitan Digital', 'Pilihan terbit dalam bentuk cetak dan e-book.', '▣'],
        ];
    @endphp
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($services as $service)
            <article class="rounded-xl border border-stone-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full border border-[#c5aa83] text-xl text-[#8b6c45]">{{ $service[3] }}</span>
                    <span class="text-xs font-semibold tracking-widest text-stone-300">{{ $service[0] }}</span>
                </div>
                <h2 class="mt-6 font-serif text-xl font-semibold text-stone-900">{{ $service[1] }}</h2>
                <p class="mt-3 text-sm leading-6 text-stone-500">{{ $service[2] }}</p>
            </article>
        @endforeach
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-16">
    <div class="flex flex-col gap-6 rounded-2xl bg-[#19372c] p-8 text-white md:flex-row md:items-center md:justify-between md:p-10">
        <div class="flex items-center gap-6">
            <div class="hidden h-24 w-28 shrink-0 overflow-hidden rounded-lg bg-white/10 md:block">
                <img src="{{ asset('images/books-stack.jpg') }}" alt="Tumpukan buku" class="h-full w-full object-cover" onerror="this.style.display='none';">
            </div>
            <div><h2 class="font-serif text-2xl font-semibold">Siap menerbitkan buku Anda?</h2><p class="mt-2 text-sm text-white/70">Konsultasikan naskah Anda sekarang juga.</p></div>
        </div>
        <a href="{{ url('/terbitkan-buku') }}" class="shrink-0 rounded-lg bg-[#f7f2e9] px-6 py-3 text-center text-sm font-semibold text-[#19372c] hover:bg-white">Terbitkan Buku Sekarang →</a>
    </div>
</section>
@endsection