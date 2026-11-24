<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
    <footer class="mt-auto bg-[#19372c] text-white">

        <div class="mx-auto grid max-w-7xl gap-10 px-6 py-12 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Brand Information --}}
            <div>
                <a href="{{ url('/') }}" class="inline-block">
                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        alt="Alaisya Publishing"
                        class="h-12 w-auto"
                    >
                </a>

                <p class="mt-5 max-w-xs text-sm leading-6 text-white/65">
                    Menerbitkan gagasan, merawat pengetahuan.
                    Mendampingi penulis menghadirkan karya
                    yang bermakna bagi setiap pembacanya.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="mb-5 font-serif text-lg font-semibold">
                    Navigasi
                </h3>

                <ul class="space-y-3 text-sm text-white/65">
                    <li><a href="{{ url('/') }}" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ url('/catalog') }}" class="hover:text-white transition">Katalog Buku</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white transition">Tentang Kami</a></li>
                </ul>
            </div>

            {{-- Publishing --}}
            <div>
                <h3 class="mb-5 font-serif text-lg font-semibold">
                    Penerbitan
                </h3>

                <ul class="space-y-3 text-sm text-white/65">
                    <li>Layanan Penerbitan</li>
                    <li>Terbitkan Buku</li>
                    <li><a href="{{ url('/authors') }}" class="hover:text-white transition">Penulis</a></li>
                    <li><a href="{{ url('/articles') }}" class="hover:text-white transition">Artikel</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="mb-5 font-serif text-lg font-semibold">
                    Hubungi Kami
                </h3>

                <ul class="space-y-3 text-sm text-white/65">
                    <li>
                        Email:
                        <a href="mailto:alaisyaacademy@gmail.com"
                        class="hover:text-white transition">
                            alaisyaacademy@gmail.com
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}"
                        class="hover:text-white transition">
                            Tentang Alaisya Publishing
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="border-t border-white/10">
            <div class="mx-auto flex max-w-7xl flex-col justify-between gap-3 px-6 py-5 text-xs text-white/45 sm:flex-row">

                <p>
                    &copy; {{ date('Y') }} Alaisya Publishing.
                    All rights reserved.
                </p>

                <p>
                    Menerbitkan Gagasan, Merawat Pengetahuan.
                </p>

            </div>
        </div>

    </footer>
</body>
</html>