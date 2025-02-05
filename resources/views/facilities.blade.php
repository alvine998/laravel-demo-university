<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehidupan Mahasiswa</title>
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
        <div>
            <div class="animate-pulse bg-gray-300 w-full h-[500px]">

            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 lg:px-40 px-4 mt-10 bg-gray-100 pb-10">
            <div class="w-full">
                <h1 class="text-4xl font-bold text-blue-900">Ragam Kegiatan Mahasiswa</h1>
                <p class="mt-2">
                    Lembaga mahasiswa dan berbagai unit kegiatan mahasiswa (UKM) menjadi ruang bagi pengembangan minat dan bakat mahasiswa di bidang akademik, kreativitas, seni, dan olah raga, seperti marching band, paduan suara, basket, voli, bela diri, pecinta alam, dan masih banyak lagi.<br /><br />
                    Tak hanya sekedar menyalurkan minat dan bakat, aktivitas UKM di lingkungan UII juga terus didorong untuk mengukir prestasi. Kami sangat bangga dengan berbagai capaian prestasi mahasiswa UII di tingkat regional, nasional maupun internasional. Kemenangan gemilang di berbagai kompetisi menunjukkan kualitas dan kompetensi mahasiswa UII untuk bisa dan siap bersaing secara global.<br /><br />
                    Informasi lebih lengkap tentang ragam kegiatan mahasiswa di Kampus UII dapat diakses melalui situs web Direktorat Pembinaan Kemahasiswaan melalui tautan di bawah ini atau <strong>hubungi 0274-898444 Ekstensi 1221</strong>
                </p>
            </div>
            <div class="w-full">
                <img src="https://www.uii.ac.id/wp-content/uploads/2018/05/Kegiatan-Mahasiswa.jpg" alt="info">
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 lg:px-40 px-4 mt-10">
            <div>
                <h1 class="text-4xl font-bold text-blue-900">Fasilitas Kampus</h1>
                <p class="mt-2">
                    Berbagai fasilitas kampus di Universitas Islam Indonesia disediakan untuk mendukung mahasiswa untuk mendapatkan pengalaman belajar yang terbaik selama menempuh studinya di UII. Didukung dengan Kampus Terpadu seluas lebih dari 35 hektar, kampus UII dirancang untuk menyatukan orang, tempat, dan program yang mendukung tumbuhnya interaksi yang positif baik di dalam maupun di luar kelas. UII juga memiliki beberapa gedung kampus dan fasilitas pendukung yang berlokasi di wilayah strategis di kota Yogyakarta.<br /><br />
                    UII memiliki puluhan fasilitas pendukung yang memastikan seluruh sivitas akademika, para pemangku kepentingan dan seluruh masyarakat dapat merasakan manfaat dari UII yang memiliki visi rahmatan lil ‘alamin. Fasilitas-fasilitas pendukung ini dapat diakses oleh mahasiswa, alumni, serta masyarakat umum di Yogyakarta.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2018/05/Perpustakaan-UII-2.jpg" alt="facility" class="mt-10">
            </div>
            <div>
                <x-faq :faqs="[
                    ['question' => 'Perpustakaan', 'answer' => 'Jalur Beasiswa Atlet & Juara Seni diperuntukkan bagi peserta seleksi dengan prestasi unggul (bidang Olah Raga atau Seni). Nilai rapor yang digunakan adalah nilai rapor semester 1, 2, 3, 4, dan 5 pada 4 nilai mata pelajaran (pengetahuan), yaitu Agama, Matematika, Bahasa Indonesia, dan Bahasa Inggris. Peserta seleksi dapat memilih 3 pilihan program studi (kecuali Program Studi Kedokteran). Biaya pendaftaran untuk PSB Beasiswa Atlet & Juara Seni adalah Rp. 200.000.'],
                    ['question' => 'Masjid Ulil Albab', 'answer' => 'Jalur Beasiswa Afirmasi diperuntukkan bagi peserta seleksi dengan prestasi unggul (bidang akademik) namun membutuhkan bantuan biaya pendidikan. Nilai rapor yang digunakan adalah nilai rapor semester 1, 2, 3, 4, dan 5 pada 4 nilai mata pelajaran (pengetahuan), yaitu Agama, Matematika, Bahasa Indonesia, dan Bahasa Inggris. Peserta seleksi dapat memilih 3 pilihan program studi (kecuali Program Studi Kedokteran). Biaya pendaftaran untuk PSB Beasiswa Duafa adalah Rp. 50.000. Tersedia kuota 3 mahasiswa untuk setiap program studi, dengan komposisi 1 mahasiswa asal DIY dan 2 kuota nasional.']
                ]" />
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>