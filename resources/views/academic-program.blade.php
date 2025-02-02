<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Pendidikan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <div class="bg-white w-full h-auto pt-32">
        <div class="mt-20 px-40">
            <h1 class="text-4xl text-blue-900 font-bold">Program Pendidikan</h1>
            <h2 class="text-2xl text-blue-900 font-bold">Program Ditawarkan Pada Tahun Akademik 2024/2025</h2>
        </div>
        <div class="mt-20 px-40 grid grid-cols-2 gap-10">
            <img src="https://www.uii.ac.id/wp-content/uploads/2018/04/Program-Pendidikan-UII.png" alt="work">
            <div>
                <h2 class="text-xl font-bold text-black">Temukan Apa yang Bisa Anda Pelajari di UII</h2>
                <p class="mt-4">
                    Ada banyak pilihan program studi dan jenjang pendidikan yang dapat Anda pilih di Universitas Islam Indonesia. Kami menawarkan 1 program diploma (D3), 3 program sarjana terapan, 27 program sarjana, 19 program magister, 6 program doktor, dan 4 program profesi dengan berbagai pilihan disiplin ilmu di bidang bisnis, hukum, sosial, teknik, kedokteran, dan masih banyak lagi.
                </p>
                <p class="mt-4">
                    Cari berdasarkan pilihan program studi dan jenis gelar untuk menemukan program pendidikan yang terbaik untuk Anda.
                </p>
                <h5 class="mt-4 font-bold text-black text-xl">Saya Sudah Punya Pilihan, Saya Ingin Mendaftar Sekarang</h5>
                <div class="mt-4">
                    <a href="/register" class="p-2 bg-blue-700 rounded text-lg text-white hover:bg-blue-600 duration-150 transition-all w-auto">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="mt-20 px-40 grid grid-cols-2 gap-10">
            <div>
                <h2 class="text-2xl font-bold text-blue-900">Program Diploma & Sarjana</h2>
                <h5 class="text-xl font-bold text-black mt-2">Saatnya Meraih Gelar Pertama Anda</h5>
                <p class="mt-2">
                    Program diploma dan sarjana adalah gelar pertama yang bisa Anda raih di universitas bagi Anda yang merupakan seorang lulusan SMA/SMK/MA atau institusi pendidikan yang sederajat, dan sedang mencari peluang untuk melanjutkan belajar di tingkat pendidikan tinggi.
                </p>
                <p class="mt-2">
                    Anda akan dapat memilih di antara program pendidikan yang ditawarkan mencakup 1 program diploma (D3), 3 program sarjana terapan, dan 27 tawaran program sarjana pada bidang studi yang beragam di UII. Klik pada salah satu tautan yang tersedia di bawah ini untuk menemukan informasi detil tentang profil dari setiap program pendidikan, persyaratan masuk, perkiraan biaya studi, dan informasi penting lainnya.
                </p>
                <div class="mt-4">
                    <h5 class="font-bold text-blue-900 text-xl">PROGRAM STUDI DIPLOMA (D3)</h5>
                    <ul>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="p-2 text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Ahli Madya (D3) Analisis Kimia
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="font-bold text-blue-900 text-xl">PROGRAM STUDI SARJANA TERAPAN</h5>
                    <ul>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Terapan Akuntansi Perpajakan
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Terapan Analisis Keuangan
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Terapan Bisnis Digital
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="font-bold text-blue-900 text-xl">PROGRAM STUDI SARJANA (S1)</h5>
                    <ul>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Akuntansi
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Arsitektur
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Ekonomi (Ekonomi Islam)
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Ekonomi (Ekonomi Pembangunan)
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Sarjana Farmasi
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-blue-900">Program Magister, Doktor & Profesi</h2>
                <h5 class="text-xl font-bold text-black mt-2">Tingkatkan Kompetensi Profesional Anda</h5>
                <p class="mt-2">
                    UII menawarkan berbagai pilihan program pendidikan pasca sarjana, baik tingkat magister (S2), doktor (S3), serta beberapa pilihan program pendidikan profesi. Berikut ini adalah daftar program pendidikan pascasarjana dan pendidikan profesi yang dapat Anda pilih untuk melanjutkan studi dan membawa pengalaman belajar Anda di UII pada tingkatan yang lebih tinggi.
                </p>
                <p class="mt-2">
                    Cari program yang tepat untuk Anda dari 29 pilihan program pasca sarjana yang tersedia di UII.
                </p>
                <div class="mt-4">
                    <h5 class="font-bold text-blue-900 text-xl">PROGRAM STUDI MAGISTER (S2)</h5>
                    <ul>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Magister Akuntansi
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Magister Arsitektur
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Magister Farmasi
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Magister Kenotariatan
                            </a>
                        </li>
                        <li class="flex flex-row gap-2 items-center">
                            <i class="fa fa-caret-right"></i>
                            <a href="/academic-program" target="_blank" class="text-blue-900 rounded hover:underline no-underline duration-150 transition-all">
                                Magister Manajemen
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>