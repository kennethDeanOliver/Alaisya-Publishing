@extends('layout.mainlayout')

@section('title', 'Tentang Kami')

@section('content')
<section class="bg-[#f4eee5]">
    <div class="mx-auto grid max-w-7xl items-center gap-9 px-6 py-12 md:grid-cols-[.95fr_1.05fr] md:py-16">
        <div class="overflow-hidden rounded-xl bg-[#d8c7ae]">
            <img src="{{ asset('images/logo.jpg') }}" alt="Alaisya Publishing" class="h-72 w-full object-cover md:h-96" onerror="this.style.display='none';">
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Mengenal Alaisya Publishing</p>
            <h1 class="mt-3 font-serif text-4xl font-semibold leading-tight text-stone-900 md:text-5xl">Tentang Kami</h1>
            <p class="mt-5 text-sm leading-7 text-stone-600">Alaisya Publishing adalah penerbit buku yang berkomitmen untuk menghadirkan karya-karya berkualitas dan bermanfaat bagi masyarakat. Kami percaya bahwa setiap gagasan memiliki nilai dan setiap penulis berhak mendapatkan pendampingan untuk menerbitkan karyanya.</p>
            <p class="mt-4 text-sm leading-7 text-stone-600">Melalui proses penerbitan yang profesional, tim kami mendampingi penulis sejak pengembangan naskah, penyuntingan, desain, hingga distribusi.</p>
            <div class="cursor-not-allowed inline-block">
                <a href="{{ url('/terbitkan-buku') }}" aria-disabled="true" tabindex="-1" class="pointer-events-none select-none mt-7 inline-flex rounded-lg bg-[#19372c] px-6 py-3 text-sm font-semibold text-white hover:bg-[#10291f]">Pelajari Lebih Lanjut →</a>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach([
            ['500+', 'Buku diterbitkan'],
            ['200+', 'Penulis'],
            ['5 Tahun+', 'Pengalaman'],
            ['100%', 'Komitmen kualitas'],
        ] as $stat)
            <div class="rounded-xl border border-stone-200 bg-white p-7 text-center shadow-sm">
                <p class="font-serif text-4xl font-semibold text-[#244536]">{{ $stat[0] }}</p>
                <p class="mt-2 text-sm text-stone-500">{{ $stat[1] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="bg-[#eee9e1]">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 py-14 md:grid-cols-2">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Arah kami</p>
            <h2 class="mt-2 font-serif text-3xl font-semibold text-stone-900">Visi</h2>
            <p class="mt-4 text-sm leading-7 text-stone-600">Menjadi mitra penerbitan yang membantu gagasan baik menjangkau lebih banyak pembaca melalui karya yang bermutu.</p>
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.18em] text-[#98764f]">Langkah kami</p>
            <h2 class="mt-2 font-serif text-3xl font-semibold text-stone-900">Misi</h2>
            <ul class="mt-4 space-y-3 text-sm leading-6 text-stone-600">
                <li>• Mendampingi penulis dalam setiap tahap penerbitan.</li>
                <li>• Menjaga kualitas editorial dan produksi buku.</li>
                <li>• Memperluas akses pembaca terhadap karya yang bermanfaat.</li>
            </ul>
        </div>
    </div>
</section>
@endsection