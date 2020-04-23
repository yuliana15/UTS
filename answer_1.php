<h1> Operator Aritmatika </h1>


<?php
global $angka;
$angka = 8;


function jenis_operator($operand) {
	global $angka;

	$operator;

	if ($operand - $angka>0){
		$operator = '+';
	} else {
		$operator = '-';
	}

	return $operator;
}

function nilai($operand){
	global $angka;

	$nilai = $operand-$angka;

	return abs($nilai);
}
?>
Nilai Angka = <?php echo $angka;?>.<br>
Berapa nilai dan jenis operator yang diperlukan jika Nilai Angka = 10 ?. nilai = <?php echo nilai(10); ?> dan jenis operator = <?php echo jenis_operator(10); ?><br>
Berapa nilai dan jenis operator yang diperlukan jika Nilai Angka = 6 ?. nilai = <?php echo nilai(6); ?> dan jenis operator = <?php echo jenis_operator(6); ?><br>
Berapa nilai dan jenis operator yang diperlukan jika Nilai Angka = 30 ?. nilai = <?php echo nilai(30); ?> dan jenis operator = <?php echo jenis_operator(30); ?><br>
Berapa nilai dan jenis operator yang diperlukan jika Nilai Angka = 10 ?. nilai = <?php echo nilai(10); ?> dan jenis operator = <?php echo jenis_operator(10); ?><br>
jenis operator yang diperlukan jika Nilai Angka = 11 ?. jenis operator = <?php echo jenis_operator(11); ?><br>
jenis operator yang diperlukan jika Nilai Angka = 10 ?. jenis operator = <?php echo jenis_operator(10); ?><br>
