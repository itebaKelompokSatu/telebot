<?php

echo "

    <div style='width: 70%'>
    <img src='gambar/logo_iteba.png' style='margin-left: 50px; width: 20%'>
        <div style='float: right'>
        <h2>Tugas mata kuliah Komunikasi Data</h2>
        <b>Kelompok 1</b><br>
        <a>1. Johanes Wilian Ang (1822002)</a><br>
        <a>2. Erwin Erikson (1822003)</a><br>
        <a>3. Johnny (1822004)</a><br>
        <a>4. Andrian Syah (1922009)</a>
        <div>
    </div><br>

    <div style='margin-left: 0px'>
        <form action='' method='POST'>
            Isi Pesan   : <textarea name='pesan' style='width: 500px; padding: 5px'></textarea><br><br>
            <input type='submit' value='Kirim Pesan' style='margin-left: 100px'>
        </form>
    </div>

";

if(isset($_POST['pesan'])) {
    $url="https://api.telegram.org/bot5288404408:AAGbv1XzoLiDip7yIrAwhSGYKGAciPplr_0/sendMessage?chat_id=-722033089&parse_mode=HTML&text=" .$_POST['pesan'];
    
    $curlHandle=curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
    curl_setopt($curlHandle, CURLOPT_POST, 1);
    $results = curl_exec($curlHandle);
    curl_close($curlHandle);
    
    echo "<b style='margin-left: 100px'>Pesan sudah terkirim</b>";
}

?>



