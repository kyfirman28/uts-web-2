<?php
// Simpan data dalam associative array
$toko = array(
    array(
        "id" => "1",
        "produk" => "pepsodent",
        "stok" => "20",
        "harga" => "10000",
        "jumlah"=> "200000"
    ),

    array(
        "id" => "2",
        "produk" => "sunlight",
        "stok" => "15",
        "harga" => "11000",
        "jumlah"=> "165000",
    ),
    array(
        "id" => "3",
        "produk" => "baygon",
        "stok" => "10",
        "harga" => "16000",
        "jumlah"=> "160000",
    ),
    array(
        "id" => "4",
        "produk" => "dove",
        "stok" => "18",
        "harga" => "22000",
        "jumlah"=> "396000",
    ),
    array(
        "id" => "5",
        "produk" => "Rinso",
        "stok" => "15",
        "harga" => "20000",
        "jumlah"=> "300000"
    ),
    array(
        "id" => "6",
        "produk" => "downy",
        "stok" => "20",
        "harga" => "11500",
        "jumlah"=> "230000",
    ),
    array(
        "id" => "7",
        "produk" => "le mineral",
        "stok" => "25",
        "harga" => "5000",
        "jumlah"=> "125000",
    ),
);    
    
    // Tambahkan data lain sesuai kebutuhan


// Fungsi untuk menampilkan data dalam tabel
function displayDataInTable($toko) {
    echo "<table border='1'>";
    echo "<tr><th>id</th><th>produk</th><th>stoke</th><th>harga</th><th>jumlah</th></tr>";
    foreach ($toko as $item) {
        echo "<tr>";
        echo "<td>".$item["id"]."</td>";
        echo "<td>".$item["produk"]."</td>";
        echo "<td>".$item["stok"]."</td>";
        echo "<td>".$item["harga"]."</td>";
        echo "<td>".$item["jumlah"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Panggil fungsi untuk menampilkan data
displayDataInTable($toko);
?>