<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilitas Internasional</title>
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
        <!-- Section 1 -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-5xl font-bold">Mobilitas Internasional</h1>
                <p class="mt-2">
                    Universitas Islam Indonesia (UII) mendorong staf akademik/non-akademik dan mahasiswanya untuk berpartisipasi dalam kegiatan mobilitas internasional. Saat ini UII telah bermitra dengan lebih dari 100 lembaga di lebih dari 10 negara, oleh karena itu UII telah membuka akses kesempatan memperoleh pengalaman internasional untuk memperluas wawasan dan membuka peluang pengembangan karier di level internasional. Untuk itu, optimalkan pengalaman internasional dan perluas cakrawala Anda.
                </p>
                <h5 class="text-black text-xl font-bold mt-4">Kontak Kami</h5>
                <p class="mt-2">
                    Informasi terkait dengan pendaftaran mahasiswa internasional, baik skema beasiswa maupun skema pembiayaan mandiri dapat menghubungi:
                </p>
                <div class="w-full mt-4">
                    <h5 class="text-black font-bold">
                        Direktorat Kemitraan/Kantor Urusan Internasional<br />
                        Universitas Islam Indonesia
                    </h5>
                    <p class="text-black">
                        Auditorium Abdulkahar Mudzakir (Lantai 4)<br />
                        Kampus Terpadu Universitas Islam Indonesia<br />
                        Telepon: 0274-898444 ext. 2304/2505<br />
                        E-mail: penelitian@uii.ac.id
                    </p>
                </div>
                <p class="mt-2">
                    Untuk informasi lebih lanjut mengenai jenis program mobilitas internasional yang ditawarkan UII, silakan akses melalui tombol tautan di bawah ini, atau Anda juga bisa memilih kategori program mobilitas yang lebih spesifik dengan mengakses tautan yang tersedia di laman ini.
                </p>
            </div>
            <div>
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/07/Mobilitas-3.jpg" alt="art">
                <h5 class="text-black text-xl font-bold mt-4">Program Mobilitas Internasional untuk Mahasiswa</h5>
                <p class="mt-2">
                    Peluang mobilitas internasional terbuka bagi semua mahasiswa UII. Anda dapat memilih jenis program yang sesuai dengan bidang kelimuan yang sedang ditempuh dan karir Anda di masa depan. Jenis program mobilitas internasional di UII dapat dikategorikan sebagai berikut:
                </p>
                <ol class="mt-2 list-inside list-decimal">
                    <li class="ml-4"><strong>Program pendek -</strong> berdurasi kurang dari satu semester seperti program musim panas/musim dingin, program magang, pelatihan praktis, kursus singkat, lomba, seminar internasional/konferensi dll;</li>
                    <li class="ml-4"><strong>Program kredit transfer -</strong> berdurasi satu semester atau lebih. Program ini dilaksanakan berdasarkan pada perjanjian kerjasama antara UII dan Universitas mitra;</li>
                    <li class="ml-4"><strong>Gelar ganda -</strong> berdurasi 1 hingga 2 tahun. Informasi lengkap tentang program gelar ganda dapat diakses di tautan berikut: uii.ac.id/gelar-ganda</li>
                </ol>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="flex lg:flex-row flex-col gap-2 lg:px-20 px-4 my-10 bg-gray-100">
            <div class="w-1/3 animate-pulse bg-gray-400">

            </div>
            <div class="w-full py-4 px-10">
                <h5 class="text-black text-4xl font-bold mt-4">
                    Soal Sering Ditanya (FAQ)
                </h5>
                <p class="mt-2">
                    Apakah Anda seorang mahasiswa UII yang ingin mencari pengalaman global? Anda dapat menjelajahi dunia sebagai cendekiawan di berbagai institusi yang bekerjasama dengan UII. Klik tombol tautan di bawah ini untuk menelusuri kesempatan Anda.
                </p>
                <button class="p-1 text-white bg-blue-900 hover:bg-blue-700 duration-150 transition-all rounded mt-4">
                    Outbond Student Mobility
                </button>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="flex lg:flex-row flex-col gap-10 lg:px-20 px-4 my-10 py-5 bg-white">
            <div class="w-full">
                <h5 class="text-black text-4xl font-bold mt-4">
                    Soal Sering Ditanya (FAQ)
                </h5>
                <div>
                    <x-faq :faqs="[
                    ['question' => 'Peraturan Masuk ke Indonesia', 'answer' => 'Mahasiswa asing yang harus mendaftar untuk mendapatkan izin belajar adalah mereka yang mengikuti program gelar penuh (full degree prigram), program pertukaran mahasiswa (student exchange program), program kursus singkat (short course program), kursus pelatihan (training/workshops), dan program kursus Bahasa Indonesia (BIPA).'],
                    ['question' => 'Surat Sponsor', 'answer' => 'Kami mengeluarkan surat sponsor untuk mahasiswa asing di Universitas Islam Indonesia. Namun, sebagai warganegara asing, Anda perlu meminta surat sponsor setiap kali Anda harus memperpanjang Visa/KITAS atau meminta Exit Entry-Reit, Exit Permit Only, dan formalitas imigrasi lainnya.']
                    ]" />
                </div>
            </div>
        </section>
    </div>
    <x-footer />
</body>

</html>