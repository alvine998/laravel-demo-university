<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Studi Laboratorium</title>
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
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:px-20 px-4 py-10 bg-white">
            <div>
                <h1 class="text-blue-900 text-5xl font-bold">Pusat Studi & Laboratorium</h1>
                <p class="mt-2">
                    Berbagai inovasi dapat terwujud ketika para akademisi dan pakar berkumpul bersama untuk mengkaji berbagai gagasan dan melakukan uji coba dalam pengembangan ilmu pengetahuan.
                    <br /><br />
                    Dari upaya mencari terobosan pada disiplin ilmu yang tunggal hingga upaya kolaborasi multi-institusional, akademisi dan peneliti di UII membawa modal intelektual yang sangat besar melalui pusat studi dan laboratorium yang kami miliki
                    <br /><br />
                    Pusat studi adalah unit tunggal atau multi-disiplin yang dibentuk untuk melakukan penelitian, pelatihan, dan berbagai layanan ilmiah. Pusat studi di lingkungan UII mencakup kajian studi tunggal maupun interdisipliner yang mencakup sejumlah bidang ilmu pengetahuan dan teknologi.
                </p>
                <img src="https://www.uii.ac.id/wp-content/uploads/2020/04/Fasilitas-Kampus.png" alt="art" class="mt-2">
                <h5 class="text-black text-2xl font-bold mt-4">Laboratorium</h5>
                <p class="mt-2">
                    UII memiliki 58 laboratorium di bawah manajemen program studi dan laboratorium terpadu yang dikelola oleh universitas yang telah terakreditasi ISO 17025. Beberapa laboratorium utama kami adalah sebagai berikut:
                </p>
                <ul class="mt-2">
                    <li class="list-disc ml-6 mt-2">Laboratorium Desain Arsitektur</li>
                    <li class="list-disc ml-6 mt-2">Laboratorium Arsitektur Digital</li>
                    <li class="list-disc ml-6 mt-2">Laboratorium Teknologi Bangunan</li>
                    <li class="list-disc ml-6 mt-2">Laboratorium Kualitas Udara & Air</li>
                    <li class="list-disc ml-6 mt-2">Laboratorium Bioteknologi Lingkungan</li>
                    <li class="list-disc ml-6 mt-2">Laboratorium Analisis Risiko Lingkungan</li>
                </ul>
            </div>
            <div>
                <h1 class="text-blue-900 text-5xl font-bold">Pusat Studi & Laboratorium</h1>
                <p class="mt-2">
                    Selain akses yang mudah dari kota-kota besar lainnya melalui New Yogyakarta International Airport (NYIA), Bandara Adisutjipto, Stasiun Kereta Yogyakarta (Tugu) dan Lempuyangan, serta Stasiun Bus Giwangan dan Jombor, Akses transportasi publik ke NYIA dapat ditempuh dengan beragam moda seperti kereta api khusus, taksi, dan juga angkutan bus khusus terjadwal (SatelQu atau Damri).
                    <br /><br />
                    Yogyakarta juga memiliki transportasi dalam kota yang andal. Mahasiswa dapat dengan mudah mengakses transportasi publik seperti bus kota (Trans Jogja) atau menggunakan taksi. Layanan perjalanan berbasis aplikasi daring seperti GO-JEK dan Grab juga dapat diandalkan dan sangat mudah ditemukan di wilayah kota. Selain itu, sepeda motor pribadi dan mobil juga banyak digunakan oleh mahasiswa.
                </p>
                <!-- List Pusat Studi -->
                <x-faq :faqs="[
                    ['question' => 'PUSAT STUDI ISLAM', 'answer' => 'Pendirian Pusat studi Islam (PSI UII) oleh Universitas Islam Indonesia merupakan upaya strategis untuk mengakomodir pengembangan sumber daya manusia dan pengembangan keilmuan secara interdisipliner, khususnya dalam lingkup ilmu-ilmu sosial (humaniora) keagamaan, namun eksistensinya sebagai lembaga yang independen, non-partisan dan non-profit yang berkomitmen untuk  menampilkan wajah Islam yang humanis yang diusahakan dalam bentuk kajian, penelitian, pendidikan, latihan, dan penerbitan. Pelembagaan Pusat Studi Islam sebenarnya telah dilakukan UII sejak tahun 1997 sebagaimana tertuang dalam Keputusan Pengurus Harian Badan Wakaf UII Nomor: V/TAP/DP/1997 tanggal 30 Nopember 1997.'],
                    ['question' => 'PUSAT STUDI GENDER', 'answer' => 'Pusat Studi Wanita (PSW) Universitas Islam Indonesia pada awal berdiri tahun 1997 berada di bawah Lembaga Penelitian (LP), namun mulai Oktober 2006 Pusat Studi Wanita berubah menjadi lembaga non struktural yang langsung memiliki alur koordinasi dengan Wakil Rektor I. Berdasarkan kajian yang menunjukkan derasnya perkembangan isu jender dan pemberdayaan perempuan, Pusat Studi Wanita berubah menjadi Pusat Studi Gender berdasarkan Keputusan Rektor pada tanggal 18 Oktober 1998 dan berkedudukan langsung di bawah koordinasi rektoriat Universitas Islam Indonesia dan berlaku sampai sekarang. Pada tahun 2010, Universitas Islam Indonesia melakukan restrukturisasi organisasi dan PSG menjadi salah satu pusat studi non struktural dan non budgeter (tidak lagi menerima subsidi untuk membiayai program-program kerjanya). Fokus Kajian PSG adalah kasus-kasus kekerasan dalam rumah tangga yang terus bertambah jumlah dan intensitasnya, disebabkan oleh salah satu faktornya adalah lemahnya fungsi keluarga. Oleh karena itu PSG perlu mengembangkan solusi, baik melalui kajian, penelitian, maupun pengabdian kepada masyarakat dengan tema utama penguatan fungsi keluarga yang rujukan utamanya Al Quran dan Hadits.']
                ]" />
            </div>
        </section>
    </div>
    <x-footer />
</body>

</html>