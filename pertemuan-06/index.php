<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
        
            
            <?php
            echo "halo dunia";
            echo "halo perkenalkan nama saya teuku maulana yunus";
            ?>
            <P>Ini contoh paragraf HTML.</P>
        </section>

        <section id="about">
            <?php
            $nim = "2511500025";
            $nama = "Teuku Maulana Yunus &#128526;";
            $tempatlahir = "Cilegon";
            $tanggallahir = "27 Agustus 2005";
            $hobby = "Berbisnis & Berolahraga &#127926;";
            $pasangan = "Alvina Syafitri &hearts;";
            $pekerjaan = "Mahasiswa & Berbisnis";
            $namaorangtua = "Elly Novida & Muhammad Yunus";
            $namakakak= "Cut yayang Tari";
            $namaadik = "-";
            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong> 
        <?php
        echo $nim;
        ?>
        </p>
            <p><strong>Nama Lengkap:</strong><?php
        echo $nama;
        ?>
        </p>
            <p><strong>Tempat Lahir:</strong><?php
        echo $tempatlahir;
        ?>
         </p>
            <p><strong>Tanggal Lahir:</strong><?php
        echo $tanggallahir;
        ?>
        </p>
            <p><strong>Hobby:</strong> <?php
        echo $hobby;
        ?>
         </p>
            <p><strong>Pasangan:</strong><?php
        echo $pasangan;
        ?>
        </p>
            <p><strong>Pekerjaan:</strong><?php
        echo $pekerjaan;
        ?>
        </p>
            <p><strong>Nama Orang tua</strong> <?php
        echo $namaorangtua;
        ?>
        </p>
            <p><strong>Nama kakak:</strong> <?php
        echo $namakakak;
        ?>
        </p>
            <p><strong>Nama adik:</strong>
        <?php
        echo $namaadik;
        ?>
        </p>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>

            <form action="" method="get" novalidate>
                <label> <span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>

                <label>
                    <span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>

                <label>
                    <span>Pesan:</span>
                    <textarea name="txtPesan" id="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
        <section id="ipk">
            <h2>Nilai Saya</h2>
<?php
            $namaMatkul1 = "Kalkulus";
        $namaMatkul2 = "Logika Informatika";
        $namaMatkul3 = "Pengantar Teknik Informatika";
        $namaMatkul4 = "Aplikasi Perkantoran";
        $namaMatkul5 = "Konsep Basis Data";

        $sksMatkul1 = "3";
        $sksMatkul2 = "3";
        $sksMatkul3 = "3";
        $sksMatkul4 = "3";
        $sksMatkul5 = "3";

        $nilaiHadir1 = "90";
        $nilaiHadir2 = "100";
        $nilaiHadir3 = "100";
        $nilaiHadir4 = "80";
        $nilaiHadir5 = "100";

        $nilaiTugas1 = "90";
        $nilaiTugas2 = "100";
        $nilaiTugas3 = "100";
        $nilaiTugas4 = "90";
        $nilaiTugas5 = "80";

        $nilaiUTS1 = "70";
        $nilaiUTS2 = "80";
        $nilaiUTS3 = "80";
        $nilaiUTS4 = "90";
        $nilaiUTS5 = "80";

        $nilaiUAS1 = "80";
        $nilaiUAS2 = "90";
        $nilaiUAS3 = "90";
        $nilaiUAS4 = "100";
        $nilaiUAS5 = "90";
?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 TEUKU MAULANA YUNUS [2511500025]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>