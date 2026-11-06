<x-layout>
     <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Home</h1>
        <p>Welcome to our website! This is the home page.</p>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#ffffff] text-[#1b1b18] lg:justify-left min-h-screen flex-col"></body>
    <h1>Raisa Andriana</h1>
    <p> Raisa Andriana adalah penyanyi asal Jakarta yang dikenal lewat suara khas dan
        lagu-lagu pop, pop soul, dan R&B. Lagu-lagunya mengangkat tema cinta, keluarga, kehilangan, hingga
        perjalanan menemukan jati diri. Selain bermusik, ia juga bermain film dan menjadi pengisi suara.
    </p>
    <ul>
        <li>Nama Lengkap: Raisa Andriana</li>
        <li>Nama Panggung: RAISA</li>
        <li>Lahir : 06 Juni 1990, Jakarta</li>
        <li>Kewarganegaraan: Indonesia</li>
        <li>Genre: Pop, Pop soul, R&B</li>
    </ul>
        <img src="../build/img/Raisa.jpg" alt="Raisa Andriana" width="300" height="400">
    <h1 class="text-2xl font-bold mb-4">Perjalanan Karir Raisa</h1>
    <p>
        Raisa memulai kariernya dari bawah, yaitu sebagai backing vocal untuk Krisdayanti dan Erwin Gutawa.
        Di awal kariernya ia juga sempat tampil pada konser David Foster di Jakarta. Album debutnya, "Raisa",
        dirilis tahun 2011 dan membawanya meraih penghargaan di Anugerah Musik Indonesia (AMI) 2012.
        Perjalanan Karir. Raisa mulai aktif di dunia musik pada 2008 dan merilis album debut "Raisa" pada 2011. Pada 2012 ia
        meraih AMI untuk Penyanyi Pendatang Baru Terbaik dan Grafis Desain Album Terbaik, lalu merilis
        album kedua "Heart to Heart" pada 2013. Pada 2014 ia bermain di film "Mantan Terindah", dan Heart to Heart meraih Album of The Year di
        Indonesian Choice Awards. Tahun 2016 ia merilis album "Handmade" dan bermain di film "Terjebak
        Nostalgia". Pada 2021 Raisa menjadi pengisi suara film "Nussa", dan pada 2022 ia merilis "It's Personal". Film
        "Harta Tahta Raisa" hadir pada 2024, disusul album "AmbiVert" pada 2025.
    </p>
        <h1 class="inline-block px-5 py-1.5 dark:text-[#080808] border-[#c916c0bd] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
        Perjalanan Karir Raisa
    </h1>
</body>
</html>
</x-layout>