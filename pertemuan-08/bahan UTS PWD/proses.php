<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;
header("location: index.php");
session_start();

function getPost($key) {
    return htmlspecialchars($_POST[$key] ?? '');
}

if (isset($_POST['txtNIM'])) {

    
    $_SESSION['about_nim'] = getPost('txtNIM');
    $_SESSION['about_nama'] = getPost('txtNamaLengkap');
    $_SESSION['about_tempat'] = getPost('txtTempatLahir');
    $_SESSION['about_tanggal'] = getPost('txtTanggalLahir');
    $_SESSION['about_hobi'] = getPost('txtHobi');
    $_SESSION['about_pasangan'] = getPost('txtPasangan');
    $_SESSION['about_pekerjaan'] = getPost('txtPekerjaan');
    $_SESSION['about_ortu'] = getPost('txtNamaOrangTua');
    $_SESSION['about_kakak'] = getPost('txtNamaKakak');
    $_SESSION['about_adik'] = getPost('txtNamaAdik');

    
    header('Location: index.php#about');
    exit; 
} 

else if (isset($_POST['txtEmail'])) {

   
    $_SESSION['sesnama'] = getPost('txtNama');
    $_SESSION['sesemail'] = getPost('txtEmail');
    $_SESSION['sespesan'] = getPost('txtPesan');

  
    header('Location: index.php#contact');
    exit; 

} 

else {
    
    header('Location: index.php');
    exit;
}
?>

