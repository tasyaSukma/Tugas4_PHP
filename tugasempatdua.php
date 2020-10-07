<?php
	$cabang = 523;
	$jumlahliter = 8991;
	$rata_rata = round(($jumlahliter/$cabang),2);

	echo "Jumlah Saluran = $cabang<br>
		Jumlah Terpakai = $jumlahliter<br>
		Rata - rata Pemakaian = ....?<br>
		Jawaban : $rata_rata liter/keluarga";
?>