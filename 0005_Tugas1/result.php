<?php
$final_total = $_GET['total'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Total Pembelian</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="background-image">
		
		<div class="result-container">
            <h1>Total Pembelian</h1>
			<p class="result-text">Selamat! Anda telah berhasil melakukan pembelian dengan total harga:</p>
			<h2>Rp <?php echo number_format($final_total, 2); ?></h2>
			<p class="result-description">Terima kasih telah berbelanja dengan kami! Kami berharap Anda puas dengan pembelian Anda.</p>
			<button class="result-button">Kembali ke Halaman Utama</button>
		</div>
	</div>
</body>
</html>