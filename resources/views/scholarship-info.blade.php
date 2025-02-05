<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Beasiswa</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <div class="bg-white w-full h-auto pt-32 pb-20">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 lg:px-40 px-4 mt-10">
            <div class="w-full">
                <h1 class="text-5xl font-bold text-blue-900">Beasiswa</h1>
                <p class="mt-2">
                    Universitas Islam Indonesia berkomitmen untuk memberikan kesempatan pendidikan yang lebih luas dengan menawarkan berbagai skema beasiswa dan bantuan biaya pendidikan untuk mahasiswa baru, mahasiswa aktif, dan juga mahasiswa asing melalui pendanaan internal UII maupun sumber dana eksternal dari institusi mitra kami.
                </p>

                <h5 class="font-bold text-black text-2xl mt-4">Beasiswa untuk Mahasiswa Baru (Domestik)</h5>
                <p class="mt-2">
                    Pada Penerimaan Mahasiswa Baru tahun akademik 2025/2026, Universitas Islam Indonesia memberikan kesempatan bagi mahasiswa baru program Sarjana (S1), Sarjana Terapan (D4), dan Diploma (D3) untuk mendapatkan bantuan biaya pendidikan melalui Jalur Pendaftaran Mahasiswa Baru Jalur Beasiswa sesuai dengan ketentuan. Program beasiswa yang ditawarkan meliputi:
                    <strong>Beasiswa Hafizah Hafiz; Beasiswa Afirmasi; Beasiswa Santri; Beasiswa Atlet & Juara Seni; Beasiswa KIP (Kartu Indonesia Pintar); serta Beasiswa Unggulan.</strong>
                </p>

                <!-- Faq -->
                <x-faq :faqs="[
                    ['question' => 'Beasiswa Atlet & Juara Seni', 'answer' => 'Jalur Beasiswa Atlet & Juara Seni diperuntukkan bagi peserta seleksi dengan prestasi unggul (bidang Olah Raga atau Seni). Nilai rapor yang digunakan adalah nilai rapor semester 1, 2, 3, 4, dan 5 pada 4 nilai mata pelajaran (pengetahuan), yaitu Agama, Matematika, Bahasa Indonesia, dan Bahasa Inggris. Peserta seleksi dapat memilih 3 pilihan program studi (kecuali Program Studi Kedokteran). Biaya pendaftaran untuk PSB Beasiswa Atlet & Juara Seni adalah Rp. 200.000.'],
                    ['question' => 'Beasiswa Afirmasi', 'answer' => 'Jalur Beasiswa Afirmasi diperuntukkan bagi peserta seleksi dengan prestasi unggul (bidang akademik) namun membutuhkan bantuan biaya pendidikan. Nilai rapor yang digunakan adalah nilai rapor semester 1, 2, 3, 4, dan 5 pada 4 nilai mata pelajaran (pengetahuan), yaitu Agama, Matematika, Bahasa Indonesia, dan Bahasa Inggris. Peserta seleksi dapat memilih 3 pilihan program studi (kecuali Program Studi Kedokteran). Biaya pendaftaran untuk PSB Beasiswa Duafa adalah Rp. 50.000. Tersedia kuota 3 mahasiswa untuk setiap program studi, dengan komposisi 1 mahasiswa asal DIY dan 2 kuota nasional.']
                ]" />


                <h5 class="font-bold text-black text-2xl mt-4">Beasiswa untuk Mahasiswa Asing</h5>
                <p class="mt-2">
                    UII memberikan kesempatan bagi siswa asing (bukan pemegang paspor Indonesia) untuk dapat menempuh pendidikan di Universitas Islam Indonesia melalui penawaran beasiswa internal UII maupun program beasiswa yang ditawarkan oleh pemerintah dan pihak eksternal.
                </p>

                <!-- Faq -->
                <x-faq :faqs="[
                    ['question' => 'Future Global Leaders Scholarship 2024', 'answer' => 'UII is committed to educating students to become future global leaders by providing opportunities for international students to learn along with UII.
                    Every year UII has offered Future Global Leaders Scholarships (FGLS) to high school graduates and bachelor degree holders from overseas with a quota of 50 international students to study in Applied Studies, Undergraduate, and Postgraduate Programs.'],
                    ]" />
            </div>
            <div class="w-full">
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/02/Pic-1-2020.jpg" alt="info">
                <h5 class="font-bold text-black text-2xl mt-4">Beasiswa untuk Mahasiswa Baru (Domestik)</h5>
                <p class="mt-2">
                    Skema beasiswa yang ditawarkan tak hanya berasal dari pendanaan internal saja. Berbagai skema beasiswa eksternal juga ditawarkan oleh institusi mitra UII. Total nilai beasiswa yang disalurkan setiap tahunnya mencapai lebih dari 10 miliar rupiah dan didistribusikan kepada lebih dari 1.500 mahasiswa.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/04/Mitra-Beasiswa-Eksternal.png" alt="info">
                <p class="mt-2">
                    Informasi lebih lengkap tentang layanan beasiswa bagi mahasiswa baru dan mahasiswa aktif UII dapat diakses melalui situs web Direktorat Pembinaan Kemahasiswaan (DPK) melalui tautan di bawah ini atau hubungi <strong>0274-898444 Ekstensi 1221</strong>
                </p>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>