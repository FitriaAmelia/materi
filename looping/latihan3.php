<?php 
    
    function cetak_deret_fibonacci($jumlah){
		// nilai awal 
		$angka_pertama = 1;
		$angka_kedua = 2;
 
		//menyimpan string angka pertama
		$hasil = "$angka_kedua";
		for ($i=0; $i<$jumlah-1; $i++) {
			// menghitung angka fibonacci
			$output = $angka_kedua + $angka_pertama;
			// hasilnya akan ditambahkan ke string $hasil
			$hasil = $hasil."$output";
 
			//masukan angka untuk dilakuakn perhitungan berikutnya 
			$angka_pertama = $angka_kedua;
			$angka_kedua = $output;
		}
		return $hasil;
	}
	function piramida_fibonacci($tingkat){
		for($i=1; $i<$tingkat+1; $i++){
			echo cetak_deret_fibonacci($i);
			echo "<br>";
		}
	}
	// menampilkan nilai berdasarkan function dengan jumlah fibonacci
	piramida_fibonacci(10);

    
    
    
    /*function print_deret_fibonacci($jumlah)
    {
      // siapkan 2 angka awal
      $angka_sebelumnya=1;
      $angka_sekarang=2;
     
      //simpan string angka awal
      $hasil = "$angka_sekarang";
    
      for ($i=0; $i<$jumlah-1; $i++)
      {
        // hitung angka fibonacci
        $output = $angka_sekarang + $angka_sebelumnya;
        // hasilnya ditambahkan ke string $hasil
        $hasil = $hasil." $output";
     
        //siapkan angka untuk perhitungan berikutnya
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
      }
      return $hasil;
    }
     
    function piramida_fibonacci($tingkat){
      for ($i=1; $i<$tingkat+1; $i++)
      {
        echo print_deret_fibonacci($i);
        echo "<br>";
      }
    }
     
    piramida_fibonacci(10);

    



    
    
    
    
    /*for ($i=1; $i<10; $i++) {
        if ($i == 5)
        continue;
        if ($i == 8)
        break;
        echo "$i";
    } 
    latihan 4
    for ($i=1; $i < 7; $i++){
        for ($a=1; $a < $i; $a++){
            echo "* ";
        }
        echo "<br><br>";
    }*/
?>