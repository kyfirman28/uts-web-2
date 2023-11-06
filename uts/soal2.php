<?php
// Daftar produk dan harganya
$produk_harga = array(
    "Pepsodent" => 10000,
    "Rinse" => 20000,
    "Dove" => 22000
);

// Jumlah produk yang dibeli
$jumlah_produk = array(
    "Pepsodent" => 2,
    "Rinse" => 1,
    "Dove" => 2
);

// Menghitung total pembelian sebelum diskon
$total_pembelian = 0;
foreach ($produk_harga as $produk => $harga) {
    $total_pembelian += $harga * $jumlah_produk[$produk];
}

// Menghitung diskon
$diskon = 0;
if ($total_pembelian >= 100000) {
    $diskon = 0.20 * $total_pembelian; // 20% diskon
} elseif ($total_pembelian >= 50000) {
    $diskon = 0.10 * $total_pembelian; // 10% diskon
}

// Menghitung total pembayaran setelah diskon
$total_pembayaran = $total_pembelian - $diskon;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi</title>
</head>
<body>
    <table border="1">
    <tr>
            <th colspan="3">tanggal transaksi        : 06 november 2023</th>
           
        </tr>
        <tr>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>
        <?php
        foreach ($produk_harga as $produk => $harga) {
            $subtotal = $harga * $jumlah_produk[$produk];
            echo "<tr>";
            echo "<td>$produk</td>";
            echo "<td>{$jumlah_produk[$produk]}</td>";
            echo "<td>$harga IDR</td>";
            echo "<td>$subtotal IDR</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td colspan="3">Total </td>
            <td><?php echo "$total_pembelian IDR"; ?></td>
        </tr>
        <tr>
            <td colspan="3">Diskon</td>
            <td><?php echo "$diskon IDR"; ?></td>
        </tr>
        <tr>
            <td colspan="3">Total Pembayaran</td>
            <td><?php echo "$total_pembayaran IDR"; ?></td>
        </tr>
        
    </table>
</body>
</html>