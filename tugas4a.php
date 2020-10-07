<?php
$h_beli=8000;
$h_jual=7500;
$untung=300;


echo "Harga Beli = Rp.", $h_beli, "<br/>";
echo "Harga Jual = Rp.", $h_jual, "<br/>";
echo "Keuntungan = Rp.", $untung, "<br/>";
echo "Berapa Jumlah Kambing yang dibeli? Jawaban : ", $jumlah=($h_beli+$untung)/$h_jual, " Ekor";

?>