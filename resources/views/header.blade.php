<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <header class="sticky top-0 z-50 border-b border-stone-200 bg-[#faf8f5]/95 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-3">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex shrink-0 items-center gap-3">
                <img
                    src="{{ asset('images/logo.jpg') }}"
                    alt="Alaisya Publishing"
                    class="h-10 w-auto object-contain"
                >
            </a>

            {{-- Navigation --}}
            <nav class="hidden items-center gap-6 text-xs font-medium lg:flex">

                <a href="{{ url('/home') }}"
                class="text-[#244536] font-semibold hover:text-[#98764f] transition">
                    Beranda
                </a>

                <a href="{{ url('/catalog') }}"
                class="text-stone-700 hover:text-[#244536] transition">
                    Katalog Buku
                </a>

                {{-- Disabled navigation items --}}
                <span class="cursor-not-allowed text-stone-400"
                    aria-disabled="true"
                    title="Belum tersedia">
                    Layanan
                </span>

                <span class="cursor-not-allowed text-stone-400"
                    aria-disabled="true"
                    title="Belum tersedia">
                    Terbitkan Buku
                </span>

                <a href="{{ url('/authors') }}"
                class="text-stone-700 hover:text-[#244536] transition">
                    Penulis
                </a>

                <a href="{{ url('/articles') }}"
                class="text-stone-700 hover:text-[#244536] transition">
                    Artikel
                </a>

                <a href="{{ url('/about') }}"
                class="text-stone-700 hover:text-[#244536] transition">
                    Tentang Kami
                </a>

            </nav>

            {{-- Contact Button --}}
            <a href="mailto:alaisyaacademy@gmail.com"
            class="hidden shrink-0 rounded-full bg-[#19372c] px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-[#10291f] sm:inline-flex">
                Hubungi Kami
            </a>

        </div>

        {{-- Mobile Navigation --}}
        <div class="border-t border-stone-200 px-6 py-3 lg:hidden">
            <nav class="mx-auto flex max-w-7xl flex-wrap gap-x-5 gap-y-3 text-xs font-medium">

                <a href="{{ url('/') }}" class="text-[#244536]">Beranda</a>
                <a href="{{ url('/catalog') }}" class="text-stone-700">Katalog Buku</a>
                <span class="text-stone-400" aria-disabled="true">Layanan</span>
                <span class="text-stone-400" aria-disabled="true">Terbitkan Buku</span>
                <a href="{{ url('/authors') }}" class="text-stone-700">Penulis</a>
                <a href="{{ url('/articles') }}" class="text-stone-700">Artikel</a>
                <a href="{{ url('/about') }}" class="text-stone-700">Tentang Kami</a>

            </nav>
        </div>
    </header>
</body>
</html>