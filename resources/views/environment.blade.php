<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkungan & Keberlanjutan</title>
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
    <div class="bg-white w-full h-auto pt-32">
        <div class="bg-gray-800 w-full h-[600px] lg:flex lg:flex-row flex-col items-center gap-10 px-32 pb-10 hidden">
            <div class="bg-green-500 rounded w-full p-10 bg-opacity-60">
                <h1 class="text-white text-4xl font-bold">Mewariskan Lingkungan yang Lestari</h1>
                <p class="mt-2 text-white">
                    Universitas Islam Indonesia berkomitmen melakukan upaya terbaik untuk mengurangi dampak buruk dari berbagai aktivitas, konsumsi energi, dan pemanfaatan teknologi terhadap lingkungan di Kampus UII. Seluruh civitas akademika, baik mahasiswa, dosen, dan staf bisa ikut melibatkan dirinya untuk membuat sejumlah perubahan kecil dan membantu mewujudkan gaya hidup warga Kampus UII yang ramah lingkungan.
                </p>
            </div>
            <div class="w-full flex flex-col">
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('penyelarasan').scrollIntoView({ behavior: 'smooth' })">❯ Penyelarasan Gedung Kampus dan Area Terbuka</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('tataruang').scrollIntoView({ behavior: 'smooth' })">❯ Tata Ruang Kampus UII</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('akses').scrollIntoView({ behavior: 'smooth' })">❯ Akses Pejalan Kaki dan Penyandang Disabilitas</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('konservasienergi').scrollIntoView({ behavior: 'smooth' })">❯ Konservasi Energi</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('konservasiair').scrollIntoView({ behavior: 'smooth' })">❯ Konservasi Air</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('kebijakan').scrollIntoView({ behavior: 'smooth' })">❯ Kebijakan Transportasi</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('pengakuan').scrollIntoView({ behavior: 'smooth' })">❯ Pengakuan Dalam Bidang Keberlanjutan</button>
                <button class="text-white text-left hover:text-yellow-400" onclick="document.getElementById('insiatif').scrollIntoView({ behavior: 'smooth' })">❯ Inisiatif Budaya Digital</button>
            </div>
        </div>


        <!-- Section 1 -->
        <section id="penyelarasan" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Penyelarasan Gedung Kampus dan Area Terbuka</h1>
                <p class="mt-2">
                    Bangunan dan Gedung di kawasan Kampus UII berperan penting dalam menciptakan identitas kampus kami sebagai tempat belajar ideal yang menghadirkan ketenangan dan kenyamanan bagi seluruh warga kampus dan merupakan simbol komitmen kuat terhadap kelestarian lingkungan. Harmonisasi antara gedung dan ruang terbuka hijau (85%) di dalam kawasan kampus UII dirancang secara terpadu dan saling melengkapi untuk memenuhi berbagai kebutuhan kajian dan sosial, serta untuk meningkatkan kualitas, daya tarik, kenyamanan, dan kelestarian lingkungan.
                </p>
            </div>
            <img src="https://www.uii.ac.id/wp-content/uploads/2023/10/Area-Hijau-2048x614.png" alt="imge" class="my-10">
            <img src="https://www.uii.ac.id/wp-content/uploads/2023/10/GreenMetric2023-IND-1.png" alt="img2">
        </section>

        <div class="w-full flex flex-col gap-4 justify-center items-center bg-green-600 py-10">
            <h1 class="text-4xl font-bold text-white">Masterplan Kampus Terpadu UII</h1>
            <a href="#" class="bg-white rounded py-2 px-6 text-blue-900">Informasi Selengkapnya</a>
        </div>

        <!-- Section 2 -->
        <section id="tataruang" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Tata Ruang Kampus UII: “The Colours of Nature”</h1>
                <p class="mt-2">
                    Koherensi tata ruang dan lingkungan yang digariskan pada Master Plan Kampus Terpadu UII akan diwujudkan untuk membangun citra Kampus Terpadu sebagai kampus humanis dan kampus lestari melalui tema komprehensif “The Colours of Nature”. Tema ini merepresentasikan hubungan lestari antara manusia dengan alam, mengedepankan keragaman dan inklusivitas baik dalam budaya maupun pola pikir keilmuan dalam bingkai keindahan alami. Selain itu diharapkan akan membawa Kampus Terpadu UII pada suatu kualitas spasial yang mampu menginspirasi warganya yang pada akhirnya dapat memunculkan insan ulil albab yang sadar dan peka terhadap ayat-ayat kauniah yang terhampar di Kampus.
                </p>
            </div>
            <img src="https://www.uii.ac.id/wp-content/uploads/2017/05/Klaster-Kampus-Terpadu-UII.jpg" alt="imge" class="my-2">
            <p class="mt-2">
                Kampus Terpadu UII digagas dipusatkan pada tiga klaster akademik atau ilmu pengetahuan (cluster of science) yaitu Klaster Ilmu-Ilmu Agama & Kemanusiaan (Religion and Humanity), Klaster Ilmu-Ilmu Alam & Kehidupan (Nature & Life Sciences), dan Klaster Ilmu-Ilmu Desain & Rekayasa (Design & Engineering). Klaster tersebut bukanlah entitas organisatoris yang kaku melainkan konsep alokasi spasial yang bersifat open system – terbuka tetapi tetap mempunyai koherensi fungsional dan citra dalam satu klaster.
            </p>
            <h1 class="text-black text-2xl font-bold mt-4">Program dakwah dan pembinaan karakter dengan landasan nilai keislaman</h1>
            <p class="mt-2">
                Kondisi tanaman di Kampus Terpadu UII sejatinya adalah hasil dari proses penghijauan yang diawali sekitar tahun 1995. Hampir semua tanaman adalah hasil dari proses penghijauan tersebut. Kampus Terpadu yang hijau dan asri ini telah membawa UII mendapatkan penghargaan Indonesia Green Awards untuk kategori Green Campus dari La Tofi School of CSR pada tahun 2012, 2014 dan 2016.
            </p>
            <p class="mt-2">
                Secara garis besar, penghijauan di Kampus UII dilakukan dengan strategi lapisan tanaman sebagai berikut:
            </p>
            <ul class="list-disc list-inside mt-2">
                <li class="ml-3 mt-3"><strong>Lapisan pertama</strong> adalah penanaman tanaman perintis yang utamanya adalah bambu-bambuan di sepanjang sungai dan kali yang melintang kampus. Fungsi dari tanaman perintis ini mengakselerasi penghijauan kampus dan menstabilkan tanah di area yang mudah terlarut oleh aliran air.</li>
                <li class="ml-3 mt-3"><strong>Lapisan kedua</strong> adalah tanaman sengon yang berfungsi untuk percepatan penghijauan yang dilakukan di tempat-tempat dimana akan didirikan bangunan. Sengon ini merupakan tanaman antara sebelum nantinya akan digantikan oleh tanaman perindang yang permanen di lapisan ketiga.</li>
                <li class="ml-3 mt-3"><strong>Lapisan ketiga</strong> adalah tanaman perindang berupa pohon-pohon yang berasal dari seluruh wilayah di Indonesia dengan pembagian di area kampus bagian barat diupayakan ditanami pepohonan dari wilayah Indonesia Barat, di area tengah dengan pepohon berasal dari wilayah Indonesia Tengah, dan area timur diisi pepohonan dari wilayah Indonesia Timur.</li>
                <li class="ml-3 mt-3"><strong>Lapisan keempat</strong> adalah tanaman khusus berupa tanaman untuk fungsi tertentu misalnya pengarah atau simbolis seperti Sawo Kecik (Manilkara kauki) dan Kepel (Stelechocarpus burahol) di area Boulevard Kampus Terpadu. Pohon Sawo Kecik merupakan simbol kebaikan dalam filsafat Jawa. Sedangkan pohon Kepel, yang daunnya akan berubah warna bergantung pada musimnya, merupakan tanaman identitas Yogyakarta.</li>
            </ul>
            <p class="mt-2">
                Penanaman tanaman di Kampus Terpadu UII juga dirancang dengan berorientasi pada warna tanaman dan secara integratif juga dipadukan dengan bangunan seperti tanaman pada dinding (green wall), di atap (roof garden) atau selasar-selasar di lantai atas bangunan.
            </p>
        </section>

        <div class="w-full flex flex-col gap-4 justify-center items-center bg-green-600 py-10 lg:px-48">
            <h1 class="text-4xl font-bold text-white">Kampus Swasta Paling Lestari di Indonesia</h1>
            <p class="text-white text-center">
                UII menerima penghargaan sebagai Perguruan Tinggi Swasta paling hijau dan lestari dalam pemeringkatan UI GreenMetric World University Rankings pada tahun 2019 & 2020
            </p>
        </div>

        <!-- Section 3 -->
        <section id="akses" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Akses Pejalan Kaki dan Penyandang Disabilitas</h1>
                <p class="mt-2">
                    Kampus yang ramah bagi pejalan kaki sangat penting untuk menciptakan lingkungan yang lebih sehat dan aman. Jalur pejalan kaki di area kampus UII memberikan prioritas akses dan pengalaman bagi pejalan kaki melalui perluasan serta konektivitas yang menghubungkan berbagai zona dan bangunan di seluruh kampus. Trotoar pada jalur pejalan kaki juga telah dilengkapi dengan jalur khusus bagi para penyandang disabilitas netra. Selain itu, tersedia jalur landai pada akses menuju bangunan bagi para pengguna kursi roda dan penyandang disabilitas lainnya.
                </p>
            </div>
            <img src="https://www.uii.ac.id/wp-content/uploads/2023/10/Untitled-design-16.png" alt="imge" class="my-10">
        </section>

        <!-- Section 4 -->
        <section id="konservasienergi" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Konservasi Energi di Kampus UII</h1>
                <h1 class="text-black text-2xl font-bold mt-4">Pengelola Fasilitas Kampus & Audit Energi</h1>
                <p class="mt-2">
                    Pemeliharaan fasilitas di lingkungan kampus UII dilakukan secara rutin di bawah koordinasi unit Pengelola Fasilitas Kampus (PFK) Yayasan Badan Wakaf UII, dan Direktorat Sarana dan Prasarana (DSP) Rektorat UII.<br /><br />
                    Melalui hasil audit energi, PFK dapat memberikan rekomendasi teknis untuk berbagai keperluan pemeliharaan fasilitas dan penghematan energi seperti: perapihan dan pembersihan instalasi; pemasangan penanda peringatan dan diagram; kalibrasi alat ukur; pengecekan terminasi rutin; pemeriksaan daya terpakai dan tercatat; serta penggunaan peralatan hemat energi.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2022/10/audit-energi.png" alt="imge" class="my-2">
                <p>
                    Penerapan teknologi Building Information Modelling (BIM) juga dilakukan untuk menggabungkan desain bangunan dengan data atau informasi teknis yang diperlukan untuk meningkatkan efektifitas dan efisiensi perencanaan, desain, konstruksi, hingga operasional gedung-gedung di lingkungan UII, khususnya untuk mendukung program konservasi energi.
                </p>
                <h1 class="text-black text-2xl font-bold mt-4">Proyek Panel Surya</h1>
                <p class="mt-2">
                    Penghematan energi dilakukan melalui berbagai upaya. Tak hanya audit energi dan pemeliharaan rutin yang dilakukan oleh UII, namun juga melibatkan berbagai inisiatif yang dilakukan oleh unit-unit di lingkungan UII, salah satunya adalah Fakultas Teknologi Industri (FTI) yang menggagas proyek panel surya untuk mendukung ketersediaan energi listrik di gedung fakultas.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2023/10/panel-surya_2023.png" alt="img2" class="my-2">
                <p class="mt-2">
                    Pembangkit listrik tenaga surya (PLTS) ini dibangun dengan kekuatan daya 2×5000 watt untuk mendukung pengoperasian berbagai peralatan elektronik di gedung FTI seperti LCD projector. Selain tujuan penghematan, proyek PLTS ini juga diharapkan dapat mengedukasi masyarakat luas tentang pentingnya energi terbarukan.<br /><br />
                    Teknologi panel surya yang kini telah terpasang diperkirakan dapat difungsikan secara optimal untuk masa 15 tahun dan dihitung dapat menghemat biaya listrik gedung FTI sekitar Rp 50.000.000/tahun.<br /><br />
                    Selain di gedung FTI, sejak bulan Maret 2020 Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) telah memasang Pembangkit Listrik Tenaga Surya (PLTS) on Grid Rooftop. Sistem ini mempunyai kapasitas 5.000 Wp. Setiap harinya ada minimal 21,3 KWh yang bisa dihemat dengan keberadaan sistem ini. Tiap bulan sekitar 278 KWh yang dihasilkan dari sistem kelistrikan yang mengandalkan cahaya matahari ini. Keberadaan PLTS ini merupakan wujud ikhtiar UII untuk menghemat energi demi lingkungan lestari dan berkelanjutan.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2022/10/panel-surya2-2022.png" alt="img3" class="my-2">
            </div>
        </section>

        <div class="w-full flex flex-col gap-4 justify-center items-center bg-green-600 py-10 lg:px-48">
            <h1 class="text-4xl font-bold text-white">Penghargaan Subroto 2017 Bidang Inovasi Energi</h1>
            <p class="text-white text-center">
                Kategori Prakarsa Kelompok Masyarakat kepada UII berdasarkan Keputusan Menteri Energi dan Sumber Daya Mineral (ESDM) No. 3086 K/74/MEM/2017 tertanggal 13 September 2017 tentang Penerima Penghargaan Energi Prakarsa tahun 2017
            </p>
        </div>

        <!-- Section 5 -->
        <section id="konservasiair" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Konservasi Air di Kampus UII</h1>
                <p class="mt-2">
                    Untuk mendukung kelestarian lingkungan, UII bersama pemerintah melalui Balai Besar Wilayah Sungai Serayu Opak (BBWSSO) mulai melaksanakan program konservasi air berupa pembangunan dua embung (reservoir) di area Kampus Terpadu UII.<br /><br />
                    Dalam proyek ini, sebuah embung akan dibangun di sebelah timur Masjid Ulil Albab pada sisi selatan jembatan. Sedangkan embung lainnya akan dibangun di sebelah barat Gedung Olah Raga (GOR) Ki Bagoes Hadikoesoemo UII, di tepi jalan kampung (Sungai Pelang).
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2022/10/Embung-2022.png" alt="imge" class="my-2">
                <p class="my-4">
                    Penetapan kedua lokasi tersebut sudah sesuai dengan dokumen perencanaan (Detail Engineering Design/DED) yang disusun. Proses pembangunan kedua embung dilaksanakan secara bertahap. Pada tahun 2019 dibangun embung di sebelah barat GOR UII terlebih dahulu. Selanjutnya akan diikuti dengan pembangunan embung di timur Masjid Ulil Albab. Pembangunan embung pertama di sebelah barat GOR UII saat ini memasuki tahap penyelesaian.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2022/10/Embung3-2022-2.png" alt="img2" class="my-2">
            </div>
        </section>

        <div class="w-full flex flex-col gap-4 justify-center items-center bg-green-600 py-10 lg:px-80">
            <h1 class="text-4xl font-bold text-white text-center">Indonesia Green Awards Penghargaan Kategori Green Campus untuk Kampus UII</h1>
            <p class="text-white text-center">
                UII menerima penghargaan Indonesia Green Awards untuk kategori Green Campus dari La Tofi School of CSR secara berturut-turut pada tahun 2012, 2014 & 2016
            </p>
        </div>

        <!-- Section 6 -->
        <section id="konservasiair" class="lg:px-20 px-4 my-10">
            <div>
                <h1 class="text-blue-900 text-4xl font-bold">Kebijakan Transportasi di Dalam Kampus</h1>
                <h1 class="text-black text-2xl font-bold mt-4">Pengelolaan Parkir</h1>
                <p class="mt-2">
                    Kampus Terpadu UII dengan luas lebih dari 38 hektar memiliki tata letak gedung kampus dan fasilitas pendidikan yang menyebar dari ujung timur (pintu masuk/boulevard kampus) hingga barat. Kawasan kampus yang luas memerlukan kebijakan transportasi yang terkait dengan pengelolaan kantong parkir dan keamanan kendaraan.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2023/10/Untitled-design-13-1-1536x488.png" alt="imge" class="my-2">
                <p class="my-4">
                    Dalam hal ini, desain tata letak kantong parkir dan pengaturan kebijakan transportasi di lingkungan kampus telah dilakukan untuk meminimalisir kepadatan arus lalu lintas di dalam kampus, terlebih lagi area Kampus Terpadu memiliki beberapa titik akses masuk dan keluar kampus yang terhubung langsung dengan jalan kampung/akses umum.<br />
                    Pengelolaan parkir dengan sistem tiket (ticketing gate system) juga diterapkan untuk memonitor seluruh kendaraan yang masuk ke dan keluar dari area Kampus Terpadu UII.
                </p>
            </div>
        </section>
    </div>
    <x-footer />
</body>

</html>