@extends('layout.mainlayout')

@section('title', 'Terbitkan Buku Anda')

@section('content')
<section class="bg-[#f4eee5]">
    <div class="mx-auto grid max-w-7xl items-center gap-8 px-6 py-10 md:grid-cols-2">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#98764f]">Wujudkan naskah Anda</p>
            <h1 class="mt-3 font-serif text-4xl font-semibold leading-tight text-stone-900 md:text-5xl">Terbitkan Buku Anda</h1>
            <p class="mt-4 max-w-xl text-sm leading-7 text-stone-600">Kami membuka kesempatan bagi Anda untuk menerbitkan karya. Ikuti langkah-langkah berikut dan kirimkan naskah Anda kepada Alaisya Publishing.</p>
        </div>
        <div class="h-48 overflow-hidden rounded-xl bg-[#d8c7ae] md:h-60">
            <img src="{{ asset('images/manuscript-workspace.jpg') }}" alt="Penulis sedang bekerja dengan naskah" class="h-full w-full object-cover" onerror="this.style.display='none';">
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 py-10">
    <div class="grid gap-4 rounded-xl border border-stone-200 bg-white p-5 sm:grid-cols-5">
        @foreach([
            ['1', 'Kirim Naskah atau Proposal'],
            ['2', 'Seleksi dan Evaluasi'],
            ['3', 'Kesepakatan Penerbitan'],
            ['4', 'Editing dan Produksi'],
            ['5', 'Terbit dan Distribusi'],
        ] as $step)
            <div class="flex items-center gap-3 sm:flex-col sm:items-start">
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#b99a70] font-serif text-lg text-[#8b6c45]">{{ $step[0] }}</span>
                <p class="text-sm font-semibold text-stone-700">{{ $step[1] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="mx-auto grid max-w-7xl gap-8 px-6 pb-16 lg:grid-cols-[minmax(0,1.7fr)_minmax(260px,1fr)]">
    <div class="rounded-xl border border-stone-200 bg-white p-6 shadow-sm md:p-8">
        <h2 class="font-serif text-2xl font-semibold text-stone-900">Ajukan Naskah Anda</h2>
        <p class="mt-2 text-sm text-stone-500">Isi informasi berikut. Tim kami akan menghubungi Anda untuk proses selanjutnya.</p>

        @if(session('success'))
            <div class="mt-5 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-800">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ url('/terbitkan-buku') }}" enctype="multipart/form-data" class="mt-7 grid gap-5 sm:grid-cols-2">
            @csrf
            <div>
                <label for="name" class="mb-2 block text-xs font-semibold text-stone-700">Nama Lengkap *</label>
                <input id="name" name="name" value="{{ old('name') }}" required class="w-full rounded-lg border border-stone-300 px-3 py-3 text-sm outline-none focus:border-[#315b45]">
                @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="category" class="mb-2 block text-xs font-semibold text-stone-700">Kategori Buku *</label>
                <select id="category" name="category" required class="w-full rounded-lg border border-stone-300 bg-white px-3 py-3 text-sm focus:border-[#315b45]">
                    <option value="">Pilih kategori</option>
                    @foreach(['Fiksi', 'Nonfiksi', 'Pendidikan', 'Bisnis & Ekonomi', 'Pengembangan Diri', 'Anak', 'Lainnya'] as $option)
                        <option value="{{ $option }}" @selected(old('category') === $option)>{{ $option }}</option>
                    @endforeach
                </select>
                @error('category')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="email" class="mb-2 block text-xs font-semibold text-stone-700">Email *</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full rounded-lg border border-stone-300 px-3 py-3 text-sm outline-none focus:border-[#315b45]">
                @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="status" class="mb-2 block text-xs font-semibold text-stone-700">Status Naskah *</label>
                <select id="status" name="status" required class="w-full rounded-lg border border-stone-300 bg-white px-3 py-3 text-sm focus:border-[#315b45]">
                    <option value="">Pilih status</option><option value="Siap terbit">Siap terbit</option><option value="Dalam proses">Dalam proses</option><option value="Proposal">Masih berupa proposal</option>
                </select>
            </div>
            <div>
                <label for="phone" class="mb-2 block text-xs font-semibold text-stone-700">Nomor WhatsApp *</label>
                <input id="phone" name="phone" value="{{ old('phone') }}" required class="w-full rounded-lg border border-stone-300 px-3 py-3 text-sm outline-none focus:border-[#315b45]">
                @error('phone')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="book_title" class="mb-2 block text-xs font-semibold text-stone-700">Judul Buku *</label>
                <input id="book_title" name="book_title" value="{{ old('book_title') }}" required class="w-full rounded-lg border border-stone-300 px-3 py-3 text-sm outline-none focus:border-[#315b45]">
                @error('book_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="mb-2 block text-xs font-semibold text-stone-700">Pesan (opsional)</label>
                <textarea id="message" name="message" rows="4" class="w-full rounded-lg border border-stone-300 px-3 py-3 text-sm outline-none focus:border-[#315b45]">{{ old('message') }}</textarea>
            </div>
            <div class="sm:col-span-2">
                <label for="manuscript" class="mb-2 block text-xs font-semibold text-stone-700">Upload Naskah / Proposal *</label>
                <input id="manuscript" type="file" name="manuscript" accept=".pdf,.doc,.docx" required class="block w-full rounded-lg border border-stone-300 bg-white text-sm text-stone-600 file:mr-4 file:border-0 file:bg-[#eee9e1] file:px-4 file:py-3 file:text-xs file:font-semibold file:text-stone-700">
                <p class="mt-2 text-xs text-stone-400">Format PDF/DOC/DOCX. Maksimal ukuran file perlu disesuaikan dengan validasi server.</p>
                @error('manuscript')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="sm:col-span-2 rounded-lg bg-[#19372c] px-6 py-3.5 text-sm font-semibold text-white hover:bg-[#10291f]">Kirim Naskah</button>
        </form>
    </div>

    <aside class="h-fit rounded-xl bg-[#eee9e1] p-6">
        <h2 class="font-serif text-xl font-semibold text-stone-900">Panduan Naskah</h2>
        <ul class="mt-5 space-y-4 text-sm leading-6 text-stone-600">
            @foreach([
                'Naskah orisinal dan belum pernah diterbitkan.',
                'Format naskah sesuai template yang ditentukan.',
                'Cantumkan sinopsis dan profil penulis.',
                'Lengkapi data yang diminta pada formulir.',
            ] as $guide)
                <li class="flex gap-3"><span class="text-[#98764f]">✓</span><span>{{ $guide }}</span></li>
            @endforeach
        </ul>
        <a href="{{ asset('files/panduan-penulisan.pdf') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-[#315b45] hover:underline">Unduh Panduan Lengkap →</a>
    </aside>
</section>
@endsection