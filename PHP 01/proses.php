<?php
    if (isset($_GET['nama']) AND isset($_GET['email']))
    {
        $nama =$_GET['nama'];
        $email =$_GET['email'];
    } 
    else
    {
        echo "Maaf, anda harus mengakses halaman ini dari form.php<br><br>";
    }

    if (!empty($nama))
    {
        echo "Nama: $nama <br />  Email: $email";
    }
    else
    {
        die("Maaf, anda harus mengisi nama");
    }
?>    