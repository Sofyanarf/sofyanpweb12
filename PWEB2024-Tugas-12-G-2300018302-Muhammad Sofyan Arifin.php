<?php
//Mendeklarasikan & menampilkan Array
echo "********Nama-Nama Bulan********<br>";
$arrBulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
echo $arrBulan[0]. "<br>";
echo $arrBulan[1]. "<br>";
echo $arrBulan[2]. "<br>";
echo $arrBulan[3]. "<br>";
echo $arrBulan[4]. "<br>";
echo $arrBulan[5]. "<br>";
echo $arrBulan[6]. "<br>";
echo $arrBulan[7]. "<br>";
echo $arrBulan[8]. "<br>";
echo $arrBulan[9]. "<br>";
echo $arrBulan[10]. "<br>";
echo $arrBulan[11]. "<br><br>";

echo "********Nama-Nama Hari********<br>";
$arrhari = array();
$arrhari[] = "Senin";
$arrhari[] = "Selasa";
$arrhari[] = "Rabu";
$arrhari[] = "kamis";
$arrhari[] = "Jumat";
$arrhari[] = "Sabtu";
$arrhari[] = "Minggu";

echo $arrhari[0]. "<br>";
echo $arrhari[1]. "<br>";
echo $arrhari[2]. "<br>";
echo $arrhari[3]. "<br>";
echo $arrhari[4]. "<br>";
echo $arrhari[5]. "<br>";
echo $arrhari[6]. "<br><br>";


//Array assosiatif
echo "********Nilai-Nilai********<br>";
$arrNilai = array("Arif"=>100, "Afri"=>90, "Wawan"=>80);
echo "Nilai Arif : ". $arrNilai['Arif']. "<br>";
echo "Nilai Afri : ". $arrNilai['Afri']. "<br>";
echo "Nilai Wawan : ". $arrNilai['Wawan']. "<br>";

$arrNilai = array();
$arrNilai['Ilyas'] = "70";
$arrNilai['Ainun'] = "60";
$arrNilai['Topek'] = "50";
echo "Nilai Ilyas : ". $arrNilai['Ilyas']. "<br>";
echo "Nilai Ainun  : ". $arrNilai['Ainun']. "<br>";
echo "Nilai Topek  : ". $arrNilai['Topek']. "<br><br>";

//Menampilkan seluruh isi array dengan for atau forach
$arrWarnaPrimer = array("blue", "red", "yellow");
echo "********Warna Primer********<br>";
for($i = 0; $i < count($arrWarnaPrimer); $i++){
    echo "Warna <font color=$arrWarnaPrimer[$i]>". $arrWarnaPrimer[$i]."</font><br>";
}

$arrWarnaSkunder = array("Green", "Purple", "Orange");
echo "<br>********Warna Skunder********<br>";
foreach($arrWarnaSkunder as $warnaSkunder){
    echo "Warna <font color=$warnaSkunder>". $warnaSkunder ."</font><br>";
}


$mahasiswa = array(
    "Nama" => "Muhammad Sofyan Arifin",
    "Umur" => 22,
    "Kelas" => "G",
    "Nilai" => array("aljabar linear" => 75, "Pemrograman Web" => 80, "kewarganegaraan" => 75)
);


echo "<br>********Metode foreach********<br>";
foreach ($mahasiswa as $key => $value) {
    if (is_array($value)) {
        echo "$key :<br>";
        foreach ($value as $matkul => $nilai) {
            echo "&nbsp;&nbsp;&nbsp;$matkul : $nilai<br>";
        }
    } else {
        echo "$key : $value<br>";
    }
}

echo "<br>********Metode while-list********<br>";
reset($mahasiswa); 
foreach ($mahasiswa as $key => $value) {
    if (is_array($value)) {
        echo "$key :<br>";
        foreach ($value as $matkul => $nilai) {
            echo "&nbsp;&nbsp;&nbsp;$matkul : $nilai<br>";
        }
    } else {
        echo "$key : $value<br>";
    }
}

echo "<br>********Mencetak Struktur Array********<br>";
$arrBuah=array("Nanas", "Mangga", "Apel", "Semangka");
$arrHarga=array("Nanas"=>3000, "Mangga"=>5000, "Apel"=>9000, "Semangka"=>4000);

echo "<pre>";
echo "Array Buah:\n";
print_r($arrBuah);
echo "\n";
echo "Array Harga:\n";
print_r($arrHarga);
echo "</pre>";

echo "<br>********Mengurutkan Array dengan Sort********<br>";
$arrHarga=array("sepatu"=>10000, "celana"=>75000, "sandal"=>30000, "baju"=>80000);
echo "<b>Array sebelum diurutkan<b>";
echo "<pre>";
print_r($arrHarga);
echo "</pre>";

sort($arrHarga);
reset($arrHarga);
echo "<b>Array setelah diurutkan dengan sort()<b>";
echo "<pre>";
print_r($arrHarga);
echo "</pre>";

echo "<br>********Mengurutkan Array dengan Rsort********<br>";
$arrHarga=array("sepatu"=>10000, "celana"=>75000, "sandal"=>30000, "baju"=>80000);
echo "<b>Array sebelum diurutkan<b>";
echo "<pre>";
print_r($arrHarga);
echo "</pre>";

rsort($arrHarga);
reset($arrHarga);
echo "<b>Array setelah diurutkan dengan rsort()<b>";
echo "<pre>";
print_r($arrHarga);
echo "</pre>";

echo "<br>********Mengurutkan Array dengan Asort()********<br>";
$arrProduk = array(
    "ventela" => 250000,
    "vans" => 500000,
    "compass" => 300000,
    "aerostreet" => 150000
);

echo "<b> Array sebelum diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrProduk);
echo "</pre>";

asort($arrProduk);
echo "<b> Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrProduk);
echo "</pre>";

echo "<br>========Mengurutkan Array dengan Arsort()==========<br>";

echo "<b> Array sebelum diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrProduk);
echo "</pre>";

arsort($arrProduk);
echo "<b> Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrProduk);
echo "</pre>";

echo "<br>********Mengurutkan Array dengan Ksort()********<br>";
$arrBulan = array(
    "April" => "April mob",
    "Februari" => "idul adha",
    "Maret" => "perawat nasional",
    "Juni" => "Hari orang tua sedunia"
);

echo "<b> Array sebelum diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrBulan);
echo "</pre>";

ksort($arrBulan);
echo "<b> Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrBulan);
echo "</pre>";

echo "<br>********Mengurutkan Array dengan Krsort()********<br>";
$arrBulan = array(
    "April" => "April mob",
    "Februari" => "idul adha",
    "Maret" => "perawat nasional",
    "Juni" => "Hari orang tua sedunia"
);

echo "<b> Array sebelum diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrBulan);
echo "</pre>";

krsort($arrBulan);
echo "<b> Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrBulan);
echo "</pre>";

echo "<br>********Mengatur Posisi Pointer Dalam********<br>";
$tranport=array('motor', 'joging', 'becak', 'helikopter');
echo "<pre>";
print_r($tranport);
echo "</pre>";
$mode=current($tranport);
echo $mode. "<br>";
$mode=next($tranport);
echo $mode. "<br>";
$mode=current($tranport);
echo $mode. "<br>";
$mode=prev($tranport);
echo $mode. "<br>";
$mode=end($tranport);
echo $mode. "<br>";
$mode=current($tranport);
echo $mode. "<br>";

echo "<br>********Mencari Elemen Array********<br>";
$arrBuah=array("semangka", "nanas", "mengkudu", "alpukat");
if(in_array("nanas", $arrBuah)){
    echo "Ada buah pisang didalam array";
} else {
    echo "Tidak ada buah pisang diarray tersebut";
}

echo "<br>";

echo "<br>********Fungsi tanpa Return Value & parameter********<br>";
function cetak_ganjil(){
    echo "Angka Ganjil <br>";
    for ($i = 0; $i < 100; $i++){
        if($i % 2 == 1){
            echo "$i, ";
        }
    }
}
echo "<b>Bilangan ganjil dari 0 sampai 100, adalah : <br><br>";
cetak_ganjil();

echo "<br><br>********Fungsi tanpa Return Value dengan parameter=========<br>";
function cetak_genap($awal, $akhir){
    echo "Angka Genap <br>";
    for($i = $awal; $i < $akhir; $i++){
        if($i % 2 == 1){
            echo "$i, ";
        }
    }
}
$awal=0;
$akhir=100;
echo "<b>Bilangan genap dari $awal sampai $akhir, adalah : <br><br>";
cetak_genap($awal, $akhir);

echo "<br>";

echo "<br>********Fungsi dengan return value & parameter********<br>";
function luas_lingkaran($jari){
    return 3.14 * $jari * $jari;
}

$jari=10;
echo "Luas lingkaran dengan jari-jari $jari = " .luas_lingkaran($jari);

echo "<br>";

function tambah_angka(&$angka){
    $angka += 10;
    return $angka;
}

echo "<br>********Passing by Value********<br>";
$angka = 5;
echo "Nilai awal \$angka = $angka <br>";
echo "Hasil setelah ditambah = " . tambah_angka($angka) . "<br>";
echo "Nilai akhir \$angka = $angka <br>";

echo "<br>";

echo "<br>********Passing by Reference********<br>";
$angka = 5;
echo "Nilai awal \$angka = $angka <br>";
echo "Hasil setelah ditambah = " . tambah_angka($angka) . "<br>";
echo "Nilai akhir \$angka = $angka <br>";

echo "<br>";

function volume_tabung($jari, $tinggi){
    return luas_lingkaran($jari) * $tinggi;
}

function luas_permukaan_bola($jari){
    return 4 * 3.14 * $jari * $jari;
}

function volume_bola($jari){
    return (4/3) * 3.14 * $jari * $jari * $jari;
}

$defined_functions = get_defined_functions();

echo "<br>********Tampilkan UDF********<br>";
echo "<pre>";
echo "Daftar fungsi yang didefinisikan:\n";
print_r($defined_functions['user']);
echo "</pre>";

echo "<br>";
echo "<br>********Cek Keberadaan Fungsi********<br>";

$arr = get_defined_functions();

echo "<pre>";
print_r($arr);
echo "</pre>";

if (function_exists('luas_lingkaran')) {
    echo "Fungsi luas_lingkaran() tersedia.<br>";
} else {
    echo "Fungsi luas_lingkaran() tidak tersedia.<br>";
}

if (function_exists('volume_tabung')) {
    echo "Fungsi volume_tabung() tersedia.<br>";
} else {
    echo "Fungsi volume_tabung() tidak tersedia.<br>";
}


?>