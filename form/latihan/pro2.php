<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenisMobil = $_POST['jenisMobil'];
        $merkMobil = $_POST['merkMobil'];
        $tglP = $_POST['tglP'];
        $plat = $_POST['plat'];
        $tglK = $_POST['tglK'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
   
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
$biayaharian = 250000;
$tgl1 = new DateTime("$tglP");
$tgl2 = new DateTime("$tglK");
$jarak = $tgl2->diff($tgl1);

$tgl11 = new DateTime("$tglK");
$tgl22 = new DateTime("$tanggalpengembalian");
$lama = $tgl22->diff($tgl11);

$denda = 240000 * $jarak->d;

$totalbiaya = $biayaharian*$jarak->d;
$totaldenda =$jarak->d * $denda;
$totalpembayaran= $totalbiaya + $totaldenda;
} 
 
?>

<html>


<style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
<div class="noprint">
<!-- Tombol print / element yang ingin dihilangkan saat print -->
</div>
<fieldset>
    <table border=6 width=100% align=”center”>
        <tr><th colspan="7">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NIk</th>
            <th>Agama</th>
            
            <th colspan="3">Penjamin</th>
            <tr>
                <td><center><?php echo "$nama"; ?></center></td>
                <td><center><?php echo "$jk"; ?></center></td>
                <td><center><?php echo "$nik"; ?></center></td>
                <td><center><?php echo "$agama"; ?></center></td>
                <td colspan="3"><center><?php echo "$penjamin"; ?></center></td>
                <!-- <td><center><?php echo "$tglP"; ?></center></td>
                <td><center><?php echo "$tglK"; ?></center></td> -->

            </tr>

        
        <tr>
        
        <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Pengembalian </th>
            <th>Menggunakan Supir</th>

            </tr>
        <th colspan="7"></th>
        <tr>
        <td><center><?php echo "$mobil"; ?></center></td>
                <td><center><?php echo "$jenisMobil"; ?></center> </td>
                <td><center><?php echo "$merkMobil"; ?></center> </td>
                <td><center><?php echo "$tglP"; ?> </center></td>
                <td><center><?php echo "$tglK"; ?></center></td>
                <td><center><?php echo "$tanggalpengembalian"; ?></center></td>
                <td colspan="2"><center><?php echo "$supir"; ?></center></td>
        </tr>
        <tr>
            <th colspan="7">Rincian Biaya</th>
        </tr>
        <tr>
            <th colspan="6" align="left">Lama Pinjaman</th>
            <td><?php echo"$jarak->d";?> Hari</td>
        </tr>
        <tr>
        <?php  
        
        ?>
            <th colspan="6" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayaharian); ?></td>
        </tr>

        <tr>
            <th colspan="6" align="left">Telat Mengembalikan</th>
            <td><?php echo"$lama->d"?> Hari</td>
        </tr>
        <tr>
            <th colspan="6" align="left">Denda</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="7">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="6" align="left">Total Biaya (Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya)?>;</td>
        </tr>
        <tr>
        <th colspan="6" align="left">Total Denda (Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>
        <tr>
            <th colspan="7">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="6" align="left">Total Pembayaran (Biaya Telat + Total Denda)</th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>

        

        
    </table><br>
    <tr>
            <td><b>Masukan uang pembayaran</b></td>
            <td> : </td>
            <td><input  name="masukanuangpembayaran"></td>
            <input type="submit" name="nama" value="Bayar">
        </tr>
    <form action="pro3.php"></form>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
    

</div>
</fieldset>
</html> 