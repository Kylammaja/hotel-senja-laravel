
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar | Hotel Senja Baru</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAF8F5] text-[#29251F] antialiased">

    <!-- NAVBAR -->
    <header class="border-b border-stone-200 bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">
            <a href="{{ route('home') }}" class="text-2xl font-bold">
                SENJA<span class="text-amber-700">BARU.</span>
            </a>

            <a href="{{ route('home') }}"
               class="text-sm font-semibold text-amber-800 hover:text-amber-600">
                ← Kembali ke Beranda
            </a>
        </nav>
    </header>

    <main class="mx-auto max-w-7xl px-6 py-16 lg:px-10">

        <!-- JUDUL -->
        <div class="mb-12">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                Room Reservation
            </p>

            <h1 class="text-4xl font-semibold md:text-5xl">
                Reservasi Kamar
            </h1>

            <p class="mt-4 text-stone-500">
                Lengkapi informasi berikut untuk memesan kamar Anda.
            </p>
        </div>

        <div class="grid items-start gap-8 lg:grid-cols-3">

            <!-- FORM BOOKING -->
            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm md:p-10 lg:col-span-2">

                <form id="bookingForm" class="space-y-8">

                    <!-- DETAIL KAMAR -->
                    <div>
                        <h2 class="mb-6 text-2xl font-semibold">
                            Detail Pemesanan
                        </h2>

                        <div class="space-y-6">

                            <div>
                                <label for="roomType" class="mb-2 block text-sm font-medium">
                                    Tipe Kamar
                                </label>

                                <select id="roomType" required
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                                    <option value="Deluxe Room" data-price="550000">Deluxe Room</option>
                                    <option value="Superior Room" data-price="750000">Superior Room</option>
                                    <option value="Suite Room" data-price="1250000">Suite Room</option>
                                </select>
                            </div>

                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="checkin" class="mb-2 block text-sm font-medium">
                                        Check-in
                                    </label>
                                    <input type="date" id="checkin" required
                                        class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                                </div>

                                <div>
                                    <label for="checkout" class="mb-2 block text-sm font-medium">
                                        Check-out
                                    </label>
                                    <input type="date" id="checkout" required
                                        class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                                </div>
                            </div>

                            <div>
                                <label for="guests" class="mb-2 block text-sm font-medium">
                                    Jumlah Tamu
                                </label>
                                <select id="guests"
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                                    <option value="1">1 Tamu</option>
                                    <option value="2" selected>2 Tamu</option>
                                    <option value="3">3 Tamu</option>
                                    <option value="4">4 Tamu</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- DATA CUSTOMER -->
                    <div class="border-t border-stone-200 pt-8">
                        <h2 class="mb-6 text-2xl font-semibold">
                            Informasi Pemesan
                        </h2>

                        <div class="grid gap-6 sm:grid-cols-2">

                            <div>
                                <label for="nik" class="mb-2 block text-sm font-medium">
                                    NIK
                                </label>
                                <input type="text" id="nik" required
                                    inputmode="numeric" pattern="[0-9]{16}"
                                    maxlength="16" autocomplete="off"
                                    placeholder="16 digit NIK"
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                            </div>

                            <div>
                                <label for="customerName" class="mb-2 block text-sm font-medium">
                                    Nama Lengkap
                                </label>
                                <input type="text" id="customerName" required
                                    autocomplete="name"
                                    placeholder="Nama sesuai identitas"
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                            </div>

                            <div>
                                <label for="phone" class="mb-2 block text-sm font-medium">
                                    Nomor Telepon
                                </label>
                                <input type="tel" id="phone" required
                                    autocomplete="tel"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium">
                                    Email
                                </label>
                                <input type="email" id="email" required
                                    autocomplete="email"
                                    placeholder="nama@email.com"
                                    class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-4 outline-none focus:border-amber-700">
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full rounded-xl bg-amber-800 px-6 py-4 font-semibold text-white transition hover:bg-amber-900">
                        Tinjau Pemesanan →
                    </button>

                    <p id="bookingMessage"
                       role="status"
                       aria-live="polite"
                       class="hidden rounded-xl bg-amber-50 p-4 text-sm text-amber-900">
                    </p>

                </form>
            </div>

            <!-- RINGKASAN -->
            <aside class="rounded-3xl bg-[#29251F] p-7 text-white lg:sticky lg:top-8">

                <h2 class="text-2xl font-semibold">
                    Ringkasan Pemesanan
                </h2>

                <img
                    src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=900&q=80"
                    alt="Kamar hotel"
                    class="mt-6 h-48 w-full rounded-xl object-cover"
                >

                <div class="mt-7 space-y-5 text-sm">

                    <div class="flex justify-between gap-4">
                        <span class="text-stone-400">Tipe Kamar</span>
                        <span id="summaryRoom">Deluxe Room</span>
                    </div>

                    <div class="flex justify-between gap-4">
                        <span class="text-stone-400">Jumlah Tamu</span>
                        <span id="summaryGuests">2 Tamu</span>
                    </div>

                    <div class="flex justify-between gap-4">
                        <span class="text-stone-400">Durasi</span>
                        <span id="summaryNights">1 Malam</span>
                    </div>

                    <div class="flex justify-between gap-4">
                        <span class="text-stone-400">Harga per Malam</span>
                        <span id="summaryPrice">Rp550.000</span>
                    </div>

                </div>

                <div class="my-7 border-t border-white/15"></div>

                <p class="text-sm text-stone-400">
                    Estimasi Total
                </p>

                <p id="summaryTotal" class="mt-2 text-3xl font-bold text-amber-300">
                    Rp550.000
                </p>

                <p class="mt-5 text-xs leading-relaxed text-stone-400">
                    Harga sementara untuk simulasi frontend.
                    Tarif akhir dan ketersediaan kamar akan
                    ditentukan oleh sistem hotel.
                </p>

            </aside>

        </div>
    </main>

    <script>
        const roomType = document.getElementById('roomType');
        const checkin = document.getElementById('checkin');
        const checkout = document.getElementById('checkout');
        const guests = document.getElementById('guests');

        const rupiah = value => new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            maximumFractionDigits: 0
        }).format(value);

        function localDate(date) {
            const y = date.getFullYear();
            const m = String(date.getMonth() + 1).padStart(2, '0');
            const d = String(date.getDate()).padStart(2, '0');
            return `${y}-${m}-${d}`;
        }

        function addDays(value, days) {
            const date = new Date(value + 'T00:00:00');
            date.setDate(date.getDate() + days);
            return localDate(date);
        }

        const today = localDate(new Date());
        checkin.min = today;
        checkin.value = today;
        checkout.min = addDays(today, 1);
        checkout.value = addDays(today, 1);

        function calculateBooking() {
            const price = Number(
                roomType.selectedOptions[0].dataset.price
            );

            const toUTC = value => {
                const [y, m, d] = value.split('-').map(Number);
                return Date.UTC(y, m - 1, d);
            };

            const nights = checkin.value && checkout.value
                ? Math.max(0, Math.round(
                    (toUTC(checkout.value) - toUTC(checkin.value)) / 86400000
                ))
                : 0;

            document.getElementById('summaryRoom').textContent =
                roomType.value;

            document.getElementById('summaryGuests').textContent =
                guests.value + ' Tamu';

            document.getElementById('summaryNights').textContent =
                nights + ' Malam';

            document.getElementById('summaryPrice').textContent =
                rupiah(price);

            document.getElementById('summaryTotal').textContent =
                rupiah(price * nights);

            return nights;
        }

        checkin.addEventListener('change', () => {
            if (!checkin.value) return;

            checkout.min = addDays(checkin.value, 1);

            if (!checkout.value || checkout.value < checkout.min) {
                checkout.value = checkout.min;
            }

            calculateBooking();
        });

        [roomType, checkout, guests].forEach(el => {
            el.addEventListener('change', calculateBooking);
        });

        document.getElementById('bookingForm').addEventListener('submit', e => {
            e.preventDefault();

            const nights = calculateBooking();
            const message = document.getElementById('bookingMessage');

            message.textContent = nights < 1
                ? 'Tanggal check-out harus setelah check-in.'
                : 'Data pemesanan sudah terisi. Ini masih simulasi frontend; reservasi belum tersimpan atau dikirim.';

            message.classList.remove('hidden');
        });

        calculateBooking();
    </script>

</body>
</html>
