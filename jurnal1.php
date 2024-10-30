<?php 
    
// pilihan nilai input
echo "[1] operator rata-rata";
echo "<br>[2] operator penjumlahan";
echo "<br>[3] operator rata-rata penjumlahan";
//nilai input
$nilai1 = -25;
$nilai2 = 65;
$operator = 5;


// Menghitung jumlah total
$jumlahtotal = $nilai1+ $nilai2;

// Menghitung rata-rata
$rata_rata = $jumlahtotal / 2;

//Menghitung rata-rata penjumlahan
$rataratajumlah = $jumlahtotal / 2;

if ($operator == 1){
    if ($nilai1 >=0 && $nilai2 >0) {
        // Menampilkan hasil rata-rata
        echo "<br> Rata-rata dari " . $nilai1 . ' dan ' . $nilai2 . ' tersebut adalah:' . $rata_rata;
    }
    else {echo "<br> nilai harus positif" ;}
}
elseif ($operator == 2){
    if ($nilai1  >=0 && $nilai2 >=0) {
        // Menampilkan hasil penjumlahan
        echo "<br> Penjumlahan dari " . $nilai1 . ' dan ' . $nilai2 . ' tersebut adalah:' . $jumlahtotal;
    }
    else {echo "<br> nilai harus positif" ;}
}
elseif ($operator == 3){
    if ($nilai1 >=0 && $nilai2 >=0) {
        // Menampilkan hasil penjumlahan
        echo "<br> Rata-rata Penjumlahan dari " . $nilai1 . ' dan ' . $nilai2 . ' tersebut adalah:' . $rataratajumlah;
    }
    else {echo "<br> nilai harus positif" ;}
}
else {echo "<br> operator tidak ditemukan";}


?>


