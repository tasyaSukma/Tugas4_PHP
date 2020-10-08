<!-- Seorang petani membeli beberapa ekor anak kambing dengan harga satu kambing Rp. 8.000,- , Dia mendapatkan total keuntungan Rp. 7.500,- dan mendapat keuntungan 300 rupiah untuk tiap ekor anak kambing. Berapa ekor anak kambing yang ia beli ? (Terapkan jawaban dalam pemrograman PHP)
 -->

<?php
	$belikambing = 8000;
	$jualkambing = 7500;
	$untung = 300;
	$jumlah = round(($belikambing-$jualkambing)/$untung);

	echo "Harga Beli = Rp $belikambing<br>
			Harga Jual = Rp $totaluntung<br>
			Keuntungan = Rp $untung<br>
			Berapa Jumlah Kambing yang dibeli?<br>
			Jawaban: $jumlah ekor";
?>
