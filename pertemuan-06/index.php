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

        <section id="ipk">
    <h2>IPK Saya </h2>
    <?php
    $namaMatkul1 = "Kalkulus"; 
    $namaMatkul2 = "Logika Informatika";
    $namaMatkul3 = "Pengantar Teknik Informatika";
    $namaMatkul4 = "Konsep Basis Data";
    $namaMatkul5 = "Wawasan Berbudi Luhur";

    $sksMatkul1 = 4;
    $sksMatkul2 = 4;
    $sksMatkul3 = 4;
    $sksMatkul4 = 4;
    $sksMatkul5 = 4;

    $nilaiHadir1 = 100;
    $nilaiTugas1 = 90;
    $nilaiUTS1 = 89;
    $nilaiUAS1 = 91;
    $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);

    $nilaiHadir2 = 100;
    $nilaiTugas2 = 90;
    $nilaiUTS2 = 95;
    $nilaiUAS2 = 88;
    $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);

    $nilaiHadir3 = 100;
    $nilaiTugas3 = 100;
    $nilaiUTS3 = 92;
    $nilaiUAS3 = 95;
    $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);

    $nilaiHadir4 = 100;
    $nilaiTugas4 = 90;
    $nilaiUTS4 = 88;
    $nilaiUAS4 = 91;
    $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);

    $nilaiHadir5 = 100;
    $nilaiTugas5 = 92;
    $nilaiUTS5 = 94;
    $nilaiUAS5 = 88;
    $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
   
    function hitungGrade($hadir, $akhir): string 
    {
        if ($hadir < 70) return "E"; 
        elseif ($akhir >= 90) return "A";
        elseif ($akhir >= 80) return "A-"; 
        elseif ($akhir >= 75) return "B+"; 
        elseif ($akhir >= 70) return "B";
        elseif ($akhir >= 65) return "B-";
        elseif ($akhir >= 60) return "C+";
        elseif ($akhir >= 55) return "C";
        elseif ($akhir >= 50) return "C-";
        elseif ($akhir >= 35) return "D";
        else return "E";
    }

    function hitungMutu($grade): float          
    {
        switch ($grade) { 
            case "A":
                return 4.0; 
            case "A-":
                return 3.7; 
            case "B+":
                return 3.3;
            case "B":
                return 3.0;
            case "B-":
                return 2.7;
            case "C+":
                return 2.3;
            case "C":
                return 2.0;
            case "C-":
                return 1.7;
            case "D":
                return 1.0;
            default:
                return 0.0; 
        }
    }

    $grade1 = hitungGrade($nilaiHadir1, $nilaiAkhir1);
    $grade2 = hitungGrade($nilaiHadir2, $nilaiAkhir2);
    $grade3 = hitungGrade($nilaiHadir3, $nilaiAkhir3);
    $grade4 = hitungGrade($nilaiHadir4, $nilaiAkhir4);
    $grade5 = hitungGrade(hadir: $nilaiHadir5, akhir: $nilaiAkhir5); 
    $mutu1 = hitungMutu($grade1);
    $mutu2 = hitungMutu($grade2);
    $mutu3 = hitungMutu($grade3);
    $mutu4 = hitungMutu($grade4);
    $mutu5 = hitungMutu($grade5); 

    $bobot1 = $mutu1 * $sksMatkul1;
    $bobot2 = $mutu2 * $sksMatkul2;
    $bobot3 = $mutu3 * $sksMatkul3;
    $bobot4 = $mutu4 * $sksMatkul4;
    $bobot5 = $mutu5 * $sksMatkul5; 


    $status1 = ($grade1 == "D" || $grade1 == "E") ? "Not Pass" : "Pass";
    $status2 = ($grade2 == "D" || $grade2 == "E") ? "Not Pass" : "Pass";
    $status3 = ($grade3 == "D" || $grade3 == "E") ? "Not Pass" : "Pass";
    $status4 = ($grade4 == "D" || $grade4 == "E") ? "Not Pass" : "Pass";
    $status5 = ($grade5 == "D" || $grade5 == "E") ? "Not Pass" : "Pass"; 
    $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
    $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
    $IPK = $totalBobot / $totalSKS;

    function display($nama, $sks, $hadir, $tugas, $uts, $uas, $akhir, $grade, $mutu, $bobot, $status)
    { 
        echo "<h3>$nama</h3>";
        echo "<p><strong>Kredit:</strong> $sks</p>";
        echo "<p><strong>Kehadiran:</strong> $hadir</p>";
        echo "<p><strong>Tugas:</strong> $tugas</p>";
        echo "<p><strong>UTS:</strong> $uts</p>";
        echo "<p><strong>UAS:</strong> $uas</p>";
     
        
        echo "<p><strong>Nilai Akhir:</strong> " . number_format($akhir, 2) . "</p>";
      
        echo "<p><strong>Nilai:</strong> $grade</p>";
       
        echo "<p><strong>Poin Nilai:</strong> $mutu</p>";
       
        echo "<p><strong>Bobot:</strong> " . number_format($bobot, 2) . "</p>";
     
        echo "<p><strong>Status:</strong> $status</p>";
        echo "<br>"; 
    } 
   
    display($namaMatkul1, $sksMatkul1, $nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1, $nilaiAkhir1, $grade1, $mutu1, $bobot1, $status1);
    display($namaMatkul2, $sksMatkul2, $nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2, $nilaiAkhir2, $grade2, $mutu2, $bobot2, $status2);
    display($namaMatkul3, $sksMatkul3, $nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3, $nilaiAkhir3, $grade3, $mutu3, $bobot3, $status3);
    display($namaMatkul4, $sksMatkul4, $nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4, $nilaiAkhir4, $grade4, $mutu4, $bobot4, $status4);
    display($namaMatkul5, $sksMatkul5, $nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5, $nilaiAkhir5, $grade5, $mutu5, $bobot5, $status5);
   
    echo "<h3>Total Bobot: " . number_format($totalBobot, 2) . "</h3>";
    echo "<h3>Total SKS: $totalSKS</h3>";
    echo "<br><h2>Cumulative IPK: " . number_format($IPK, 2) . "</h2>"; 
    ?>
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
        
    </main>

    <footer>
        <p>&copy; 2025 TEUKU MAULANA YUNUS [2511500025]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>