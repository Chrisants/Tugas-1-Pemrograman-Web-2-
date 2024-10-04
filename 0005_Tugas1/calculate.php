<?php
$member = $_POST['member'] == 'yes' ? true : false;
$total = $_POST['total'];

if ($member) {
	$discount = 0.1; // 10% diskon untuk member
} else {
	$discount = 0;
}

if ($total >= 500000) {
	$additional_discount = 0.1; // 10% tambahan diskon untuk pembelian diatas 500,000
} elseif ($total >= 300000) {
	$additional_discount = 0.05; // 5% tambahan diskon untuk pembelian antara 300,000 dan 500,000
} else {
	$additional_discount = 0;
}

$total_discount = $discount + $additional_discount;
$final_total = $total - ($total * $total_discount);

echo $final_total;
?>