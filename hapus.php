<?php
require 'function.php';
$no = $_GET["no"];

if (hapus($no) > 0){
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = 'index.php';
    </script>
    ";
    
} else {
    echo "
    <script>
        alert('DATA GAGAL DIHAPUS');
        document.location.href = 'index.php';
    </script>
    ";
}
?>