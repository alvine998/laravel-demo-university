<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantor Urusan Internasional</title>
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
                <h1 class="text-blue-900 text-5xl font-bold">Kantor Urusan Internasional</h1>
                <p class="mt-2">
                    Untuk memperkuat internasionalisasi UII dan secara aktif terlibat dalam berbagai komunitas dan kegiatan berskala global, UII mendirikan Kantor Urusan Internasional (KUI) atau juga disebut Office of International Affairs (OIA) di bawah unit Direktorat Kemitraan/Kantor Urusan Internasional.
                </p>
                <p class="mt-2">
                    KUI memiliki peran sebagai berikut: (1) menilai dan melaksanakan kerja sama internasional secara intensif dengan institusi mitra luar negeri, (2) menyediakan layanan untuk mahasiswa asing seperti pengurusan imigrasi, orientasi kampus, dan konsultasi akademis sejak persiapan kedatangan mereka di UII hingga nanti menyelesaikan studi, (3) membantu proses perkuliahan dan mahasiswa UII yang berpartisipasi dalam program kolaborasi dengan universitas mitra di luar negeri, serta (4) mendukung pengembangan kolaborasi untuk kuliah tamu dan penelitian asing yang akan berafiliasi dengan UII.
                </p>
            </div>
            <div>
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/07/Mobilitas-1.jpg" alt="art">
                <h5 class="text-black text-xl font-bold mt-4">Perlu bantuan? Hubungi kami</h5>
                <p class="mt-2">
                    Untuk mendapatkan informasi dan layanan KUI, silakan menghubungi:
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
            </div>
        </section>

        <!-- Section 2 -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:px-20 px-4 my-10 py-10 bg-gray-100">
            <div>
                <h5 class="text-black text-2xl font-bold mt-4">
                    Layanan Visa & Imigrasi
                </h5>
                <p class="mt-2">
                    Sebagai mahasiswa asing yang berencana untuk belajar di wilayah Republik Indonesia, Anda harus mengajukan permohonan visa setelah menerima Surat Penerimaan dari Universitas Islam Indonesia. Perlu diketahui bahwa sebelum mengajukan permohonan visa, Anda harus mendapatkan izin belajar yang dikeluarkan oleh Kementerian Pendidikan dan Kebudayaan Republik Indonesia.
                </p>
                <div>
                    <x-faq :faqs="[
                    ['question' => 'Peraturan Masuk ke Indonesia', 'answer' => 'Mahasiswa asing yang harus mendaftar untuk mendapatkan izin belajar adalah mereka yang mengikuti program gelar penuh (full degree prigram), program pertukaran mahasiswa (student exchange program), program kursus singkat (short course program), kursus pelatihan (training/workshops), dan program kursus Bahasa Indonesia (BIPA).'],
                    ['question' => 'Surat Sponsor', 'answer' => 'Kami mengeluarkan surat sponsor untuk mahasiswa asing di Universitas Islam Indonesia. Namun, sebagai warganegara asing, Anda perlu meminta surat sponsor setiap kali Anda harus memperpanjang Visa/KITAS atau meminta Exit Entry-Reit, Exit Permit Only, dan formalitas imigrasi lainnya.']
                    ]" />
                </div>
            </div>
            <div>
                <h5 class="text-black text-2xl font-bold mt-4">
                    Program BIPA:
                    Dukungan untuk meningkatkan keterampilan berbahasa Indonesia
                </h5>
                <p class="mt-2">
                    Bahasa Indonesia Bagi Penutur Asing (BIPA) bertujuan untuk memperkenalkan bahasa dan budaya Indonesia kepada orang asing yang ingin tinggal di Indonesia. Program ini juga membantu para calon mahasiswa asing Universitas Islam Indonesia untuk mempersiapkan diri guna berinteraksi dan berkomunikasi dengan Bahasa Indonesia, baik di ruang kelas atau kegiatan sehari-hari.
                </p>
                <p class="mt-2">
                    Program BIPA di UII difasilitasi oleh Center of International Language and Cultural Studies (CILACS). Untuk informasi lengkap tentang pendaftaran dan biaya kursus, silakan akses melalui tombol tautan di bawah ini.
                </p>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="flex lg:flex-row flex-col gap-10 lg:px-20 px-4 my-10 py-5 bg-white">
            <div class="w-1/4">
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/07/KUI-1.jpg" alt="kui">
            </div>
            <div class="w-full">
                <h5 class="text-black text-4xl font-bold mt-4">
                    UII Learning Center:
                    Membantu perjalanan belajar mahasiswa
                </h5>
                <p class="mt-2">
                    UII Learning Center adalah sebuah fasilitas yang menyediakan bantuan bagi mahasiswa Universitas Islam Indonesia untuk menyesuaikan diri dengan kehidupan akademik di universitas. Program ini juga bertujuan untuk membantu mahasiswa untuk sukses secara akademik. Setiap mahasiswa dapat memilih layanan yang sesuai dengan permasalahan akademik mereka masing-masing.
                </p>
                <p class="mt-2">
                    Peranan UII Learning Center adalah untuk membantu mahasiswa menjalani transisi yang baik dari kehidupan mereka di sekolah menengah atas ke bangku perkuliahan. UII Learning Center juga memberi fasilitas kepada mahasiswa berupa workshop tentang solusi dari berbagai masalah akademik yang mungkin berdampak pada kelancaran studi mahasiswa di UII seperti permasalahan dengan manajemen waktu, penyesuaian akademik, manajemen stres, penyampaian presentasi dan penulisan akademik, berpikir kritis, dan masih banyak lagi.
                </p>
                <p class="mt-2">
                    Jika Anda memiliki hambatan dalam hal tersebut silahkan menghubungi UII Leaning Center untuk mencari solusinya. UII Learning Center akan membantu anda untuk mengidentifikasi permasalahannya dengan bantuan dari tentor yang ahli di bidangnya.
                </p>
            </div>
        </section>
    </div>
    <x-footer />
</body>

</html>