
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Hotel Senja Baru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAF8F5] text-[#29251F] antialiased">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 border-b border-stone-200 bg-white/95 backdrop-blur">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">

            <a href="#beranda" class="text-2xl font-bold tracking-tight">
                SENJA<span class="text-amber-700">BARU.</span>
            </a>

           <div class="hidden items-center gap-9 text-sm font-medium md:flex">
    <a href="#beranda" class="hover:text-amber-700">Beranda</a>
    <a href="#tentang" class="hover:text-amber-700">Tentang Kami</a>
    <a href="#kamar" class="hover:text-amber-700">Kamar</a>
    <a href="#fasilitas" class="hover:text-amber-700">Fasilitas</a>
    <a href="#kontak" class="hover:text-amber-700">Kontak</a>
</div>
            <a href="{{ route('booking') }}"
   class="rounded-full bg-amber-800 px-6 py-3 text-sm font-semibold text-white transition hover:bg-amber-900">
    Pesan Sekarang
</a>

        </nav>
    </header>

    <!-- HERO -->
    <section id="beranda" class="relative flex min-h-[85vh] items-center overflow-hidden">

        <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=2000&q=85"
            alt="Suasana hotel"
            class="absolute inset-0 h-full w-full object-cover"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/20"></div>

        <div class="relative z-10 mx-auto w-full max-w-7xl px-6 py-24 text-white lg:px-10">

            <p class="mb-6 text-sm font-semibold uppercase tracking-[0.3em] text-amber-300">
                Welcome to Hotel Senja Baru
            </p>

            <h1 class="max-w-3xl text-5xl font-semibold leading-tight tracking-tight md:text-7xl">
                Tempat Terbaik
                untuk Menikmati
                <span class="text-amber-300">Setiap Momen.</span>
            </h1>

            <p class="mt-7 max-w-xl text-lg leading-relaxed text-white/80">
                Rasakan pengalaman menginap yang nyaman,
                tenang, dan berkesan dengan pelayanan
                terbaik dari Hotel Senja Baru.
            </p>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="#kamar"
                   class="rounded-full bg-amber-600 px-8 py-4 font-semibold text-white transition hover:bg-amber-700">
                    Jelajahi Kamar
                </a>

                <a href="#fasilitas"
                   class="rounded-full border border-white/70 px-8 py-4 font-semibold text-white transition hover:bg-white hover:text-stone-900">
                    Lihat Fasilitas
                </a>

            </div>

        </div>
    </section>

    
<!-- TENTANG HOTEL -->
<section id="tentang" class="scroll-mt-24 bg-white px-6 py-24 lg:px-10">

    <div class="mx-auto grid max-w-7xl items-center gap-16 lg:grid-cols-2">

        <!-- FOTO HOTEL -->
        <div class="relative">

            <div class="overflow-hidden rounded-3xl">
                <img
                    src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=85"
                    alt="Interior Hotel Senja Baru"
                    loading="lazy"
                    class="h-[500px] w-full object-cover transition duration-700 hover:scale-105"
                >
            </div>

            <!-- DEKORASI -->
            <div class="absolute -bottom-7 -right-3 rounded-2xl bg-amber-800 px-8 py-6 text-white shadow-xl md:right-8">

                <p class="text-2xl font-semibold">
                    Senja Baru
                </p>

                <p class="mt-1 text-sm text-amber-100">
                    Your Comfort, Our Priority
                </p>

            </div>

        </div>

        <!-- INFORMASI HOTEL -->
        <div>

            <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-amber-700">
                About Our Hotel
            </p>

            <h2 class="text-4xl font-semibold leading-tight tracking-tight md:text-5xl">
                Kenyamanan dan
                <span class="text-amber-800">
                    Keindahan
                </span>
                dalam Satu Tempat.
            </h2>

            <div class="mt-6 h-1 w-16 rounded-full bg-amber-700"></div>

            <p class="mt-8 text-base leading-8 text-stone-600">
                Selamat datang di Hotel Senja Baru, tempat di mana
                kenyamanan, ketenangan, dan keramahan berpadu untuk
                menciptakan pengalaman menginap yang berkesan.
            </p>

            <p class="mt-5 text-base leading-8 text-stone-600">
                Kami menghadirkan suasana hotel yang hangat
                dengan desain modern dan fasilitas yang dirancang
                untuk memenuhi kebutuhan setiap tamu, baik untuk
                perjalanan bisnis, liburan keluarga, maupun
                waktu bersantai.
            </p>

            <!-- KEUNGGULAN -->
            <div class="mt-9 grid gap-5 sm:grid-cols-2">

                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl">
                        🛏️
                    </div>
                    <div>
                        <h3 class="font-semibold">Kamar Nyaman</h3>
                        <p class="text-xs text-stone-500">Desain modern dan elegan</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl">
                        🏊
                    </div>
                    <div>
                        <h3 class="font-semibold">Fasilitas Lengkap</h3>
                        <p class="text-xs text-stone-500">Relaksasi dan kebugaran</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl">
                        ☕
                    </div>
                    <div>
                        <h3 class="font-semibold">Tempat Bersantap</h3>
                        <p class="text-xs text-stone-500">Suasana yang menyenangkan</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl">
                        ✨
                    </div>
                    <div>
                        <h3 class="font-semibold">Pelayanan Ramah</h3>
                        <p class="text-xs text-stone-500">Mengutamakan kenyamanan</p>
                    </div>
                </div>

            </div>

            <!-- TOMBOL -->
            <div class="mt-10">
                <a href="#fasilitas"
                   class="inline-flex items-center gap-3 rounded-full bg-amber-800 px-8 py-4 text-sm font-semibold text-white transition hover:bg-amber-900">
                    Jelajahi Fasilitas
                    <span>→</span>
                </a>
            </div>

        </div>

    </div>

</section>


    <!-- KAMAR -->
    <section id="kamar" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">

        <div class="mb-12 text-center">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                Our Rooms
            </p>

            <h2 class="text-4xl font-semibold md:text-5xl">
                Pilihan Kamar Kami
            </h2>

            <p class="mx-auto mt-5 max-w-xl text-stone-500">
                Pilih kamar yang sesuai dengan kebutuhan
                dan kenyamanan selama menginap.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">

            @foreach ([
                ['nama' => 'Deluxe Room',
                 'foto' => 'photo-1611892440504-42a792e24d32'],
                ['nama' => 'Superior Room',
                 'foto' => 'photo-1590490360182-c33d57733427'],
                ['nama' => 'Suite Room',
                 'foto' => 'photo-1582719508461-905c673771fd']
            ] as $kamar)

            <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 transition hover:-translate-y-1 hover:shadow-xl">

                <div class="overflow-hidden">
                    <img
                        src="https://images.unsplash.com/{{ $kamar['foto'] }}?auto=format&fit=crop&w=900&q=80"
                        alt="{{ $kamar['nama'] }}"
                        loading="lazy"
                        class="h-64 w-full object-cover transition duration-500 hover:scale-105"
                    >
                </div>

                <div class="p-7">
                    <h3 class="text-2xl font-semibold">
                        {{ $kamar['nama'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-stone-500">
                        Nikmati suasana menginap yang nyaman
                        dengan desain kamar yang elegan.
                    </p>

                    <p class="mt-6 text-sm font-semibold text-amber-800">
                        Detail dan harga segera tersedia
                    </p>
                </div>

            </article>

            @endforeach

        </div>
    </section>

    <!-- FASILITAS -->
<section id="fasilitas" class="bg-[#F0EAE1] px-6 py-24">
    <div class="mx-auto max-w-7xl">

        <div class="mb-12 text-center">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                Our Facilities
            </p>

            <h2 class="text-4xl font-semibold md:text-5xl">
                Fasilitas Hotel Kami
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-stone-500">
                Nikmati berbagai fasilitas terbaik yang dirancang untuk memberikan
                kenyamanan dan pengalaman menginap yang menyenangkan.
            </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Gym -->
            <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 transition hover:-translate-y-1 hover:shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=900&q=80"
                    alt="Gym Hotel"
                    class="h-56 w-full object-cover"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Gym</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-500">
                        Fasilitas kebugaran modern untuk menjaga tubuh tetap sehat
                        selama menginap.
                    </p>
                </div>
            </article>

            <!-- Kolam Renang -->
            <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 transition hover:-translate-y-1 hover:shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=900&q=80"
                    alt="Kolam Renang Hotel"
                    class="h-56 w-full object-cover"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Kolam Renang</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-500">
                        Area santai yang nyaman untuk berenang dan menikmati suasana
                        hotel.
                    </p>
                </div>
            </article>

            <!-- Lobby -->
            <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 transition hover:-translate-y-1 hover:shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=900&q=80"
                    alt="Lobby Hotel"
                    class="h-56 w-full object-cover"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Lobby</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-500">
                        Lobby elegan dan nyaman sebagai tempat menyambut tamu dengan
                        suasana hangat.
                    </p>
                </div>
            </article>

            <!-- Tempat Makan -->
            <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 transition hover:-translate-y-1 hover:shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=900&q=80"
                    alt="Restoran Hotel"
                    class="h-56 w-full object-cover"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Tempat Makan</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-500">
                        Restoran hotel dengan suasana nyaman untuk menikmati berbagai
                        hidangan lezat.
                    </p>
                </div>
            </article>

        </div>
    </div>
</section>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-[#29251F] px-6 py-14 text-white">

        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-8 md:flex-row">

            <div>
                <h2 class="text-2xl font-bold">
                    SENJA<span class="text-amber-400">BARU.</span>
                </h2>

                <p class="mt-4 max-w-sm text-sm leading-relaxed text-stone-400">
                    Menghadirkan pengalaman menginap
                    yang nyaman dan berkesan.
                </p>
            </div>

            <div>
                <h3 class="font-semibold">Navigasi</h3>

                <div class="mt-4 flex flex-col gap-3 text-sm text-stone-400">
                    <a href="#beranda">Beranda</a>
                    pesan sekarang>Kamar</a>
                    <a href="#fasilitas">Fasilitas</a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold">Kontak</h3>
                <p class="mt-4 text-sm text-stone-400">
                    Informasi kontak hotel akan ditambahkan.
                </p>
            </div>

        </div>

        <div class="mx-auto mt-12 max-w-7xl border-t border-white/10 pt-6 text-center text-sm text-stone-500">
            © {{ date('Y') }} Hotel Senja Baru.
        </div>

    </footer>

</body>
</html>
