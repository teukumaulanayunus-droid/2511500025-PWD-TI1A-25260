<?php
function redirect_ke($url)
{
  header("Location: " . $url);
  exit();
}
function bersihkan($str)
{
  return htmlspecialchars(trim($str));
}

function tidakKosong($str)
{
  return strlen(trim($str)) > 0;
}

function formatTanggal($tgl)
{
  return date("d M Y", strtotime($tgl));
}

function tampilkanBiodata($conf, $arr)
{
  $html = "";
  foreach ($conf as $k => $v) {
    $label = $v["label"];
    $nilai = bersihkan($arr[$k] ?? '');
    $suffix = $v["suffix"];

    $html .= "<p><strong>{$label}</strong> {$nilai}{$suffix}</p>";
  }
  return $html;
}
$flash_sukses = $_SESSION['flash_sukses'] ?? ''; #jika query sukses
$flash_error = $_SESSION['flash_error'] ?? '';   #jika ada error

#bersihkan session ini
unset($_SESSION['flash_sukses'], $_SESSION['flash_error']);
?>

<?php if (!empty($flash_sukses)): ?>
    <div style="padding:10px; margin-bottom:10px; background: #d4edda; color: #155724; border-radius: 6px;">
        <?= $flash_sukses; ?>
    </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
    <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius: 6px;">
        <?= $flash_error; ?>
    </div>
<?php endif; ?>